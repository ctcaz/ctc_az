<?php
/*
		File:	App\Http\Controllers\Nom\SpecialityController.php
		 Ver:	1.00.003
 Purpose:	Speciality Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_speciality;

class SpecialityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_speciality = N_Speciality::paginate(10); //active()->
         
				 return view('admin.nom.specialities.index', compact('n_speciality'));

					/*
					$id = Snumber::getLastNumber('n_speciality');
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
        //return view('admin.nom.specialities.create');
				return view('admin.nom.specialities.create');
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
				$id = Snumber::getLastNumber((new N_Speciality)->getTable());

        //Create a new currency
				$update = new N_Speciality();
        $update = ['id'=>$id, 'name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
        N_Speciality::create($update);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.nom.specialities.index');*/
				return redirect()->route('nom.specialities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_Speciality  $n_speciality
     * @return \Illuminate\Http\Response
     */
    public function show(N_speciality $n_speciality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_Speciality  $n_speciality
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_speciality = N_Speciality::findOrFail($id);
        //dd($n_computerskill);
        return view('admin.nom.specialities.edit', compact('n_speciality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_Speciality  $n_speciality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            /*'code' => 'required',*/
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
					/*dd($update);*/
          N_Speciality::where('id',$id)->update($update);

          /*return redirect()->route('nom.specialities.index');*/
					return redirect()->route('nom.specialities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_Speciality  $n_speciality
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_speciality $n_speciality)
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
