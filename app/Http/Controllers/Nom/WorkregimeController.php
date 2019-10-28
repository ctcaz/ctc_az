<?php
/*
		File:	App\Http\Controllers\Nom\WorkregimeController.php
		 Ver:	1.00.003
 Purpose:	Work regime Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_workregime;

class WorkregimeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_workregime = N_workregime::paginate(10); //active()->
         
				 return view('admin.nom.workregimes.index', compact('n_workregime'));

					/*
					$id = Snumber::getLastNumber('n_workregime');
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
        //return view('admin.nom.workregimes.create');
				return view('admin.nom.workregimes.create');
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
				/*$id = Snumber::getLastNumber('n_specialities');*/
				$id = Snumber::getLastNumber((new n_workregime)->getTable());

        //Create a new currency
				$update = new N_workregime();
        $update = ['id'=>$id, 'name' => $request->name, 'old_code' => $request->old_code, 'is_active'=>$request->is_active];
        N_workregime::create($update);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.nom.workregimes.index');*/
				return redirect()->route('nom.workregimes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_workregime  $n_workregime
     * @return \Illuminate\Http\Response
     */
    public function show(N_workregime $n_workregime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_workregime  $n_workregime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_workregime = N_workregime::findOrFail($id);
        //dd($n_computerskill);
        return view('admin.nom.workregimes.edit', compact('n_workregime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_workregime  $n_workregime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            /*'old_code' => 'required',*/
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'old_code' => $request->old_code, 'is_active'=>$request->is_active];
					/*dd($update);*/
          N_workregime::where('id',$id)->update($update);

          /*return redirect()->route('nom.workregimes.index');*/
					return redirect()->route('nom.workregimes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_workregime  $n_workregime
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_workregime $n_workregime)
    {
        //
    }
		
		
    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'name' => 'reqiured',
        /*'old_code'=> 'required',*/
        'is_active'=>'required',
      ]);
    }

}
