<?php
/*
		File:	App\Http\Controllers\Nom\ProfessionclassController.php
		 Ver:	1.00.003
 Purpose:	Profession class Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_professionclass;

class ProfessionclassController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_profession_classes = N_professionclass::paginate(10); //active()->

				 return view('admin.nom.professionclass.index', compact('n_profession_classes'));

					/*
					$id = Snumber::getLastNumber('n_professionclass');
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
        //return view('admin.nom.professionclass.create');
				return view('admin.nom.professionclass.create');
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
				$id = Snumber::getLastNumber('n_professionclass');

        //Create a new currency
				$update = new N_professionclass();
        $update = ['id'=>$id, 'name' => $request->name, 'code' => $request->code, 'lvl' => $request->lvl, 'is_active'=>$request->is_active];
        N_professionclass::create($update);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.nom.professionclass.index');*/
				return redirect()->route('nom.professionclass.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_professionclass  $n_professionclass
     * @return \Illuminate\Http\Response
     */
    public function show(N_professionclass $n_professionclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_professionclass  $n_professionclass
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_professionclass = N_professionclass::findOrFail($id);
        //dd($n_computerskill);
        return view('admin.nom.professionclass.edit', compact('n_professionclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_professionclass  $n_professionclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            /*'code' => 'required',*/
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'code' => $request->code, 'lvl' => $request->lvl, 'is_active'=>$request->is_active];
					/*dd($update);*/
          N_professionclass::where('id',$id)->update($update);

          /*return redirect()->route('nom.professionclass.index');*/
					return redirect()->route('nom.professionclass.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_professionclass  $n_professionclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_professionclass $n_professionclass)
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
