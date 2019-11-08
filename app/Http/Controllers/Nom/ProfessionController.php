<?php
/*
		File:	App\Http\Controllers\Nom\ProfessionController.php
		 Ver:	1.00.003
 Purpose:	Profession Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use Illuminate\Support\Facades\Log;
use App\Models\General\Snumber;
use App\Models\Nom\N_profession;

class ProfessionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_profession = N_profession::paginate(10); //active()->

				 return view('admin.nom.professions.index', compact('n_profession'));

					/*
					$id = Snumber::getLastNumber('n_profession');
				  print_r ($id);
					*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('admin.nom.professions.create');
				return view('admin.nom.professions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
				$id = Snumber::getLastNumber('n_professions');

        //Create a new currency
				$update = new N_profession();
        $update = ['id'=>$id, 'name' => $request->name, 'code' => $request->code, 'description' => $request->description, 'is_active'=>$request->is_active];
        N_profession::create($update);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.nom.professions.index');*/
				return redirect()->route('nom.professions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_profession  $n_profession
     * @return \Illuminate\Http\Response
     */
    public function show(N_profession $n_profession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_profession  $n_profession
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_profession = N_profession::findOrFail($id);
        //dd($n_computerskill);
        return view('admin.nom.professions.edit', compact('n_profession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_profession  $n_profession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //Log::info($request);
          $request->validate([
            'name' => 'required',
            /*'code' => 'required',*/
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'code' => $request->code, 'description' => $request->description, 'is_active'=>$request->is_active];
					/*dd($update);*/
          N_profession::where('id',$id)->update($update);

          /*return redirect()->route('nom.professions.index');*/
					return redirect()->route('nom.professions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_profession  $n_profession
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_profession $n_profession)
    {
        //
    }


    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'name' => 'reqiured',
        /*'code'=> 'required',*/
        'is_active'=>'required',
      ]);
    }

}
