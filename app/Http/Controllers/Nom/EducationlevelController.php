<?php
/*
		File:	App\Http\Controllers\Nom\EducationlevelController.php
		 Ver:	1.00.003
 Purpose:	Education level Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_educationlevel;

class EducationlevelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_education_level = N_educationlevel::paginate(10); //active()->
         
				 return view('admin.nom.educationlevels.index', compact('n_education_level'));

					/*
					$id = Snumber::getLastNumber('n_education_level');
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
        return view('admin.nom.educationlevels.create');
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
				$id = Snumber::getLastNumber('n_education_level');

        //Create a new currency
				$update = new N_educationlevel();
        $update = ['id'=>$id, 'name' => $request->name, 'name_en' => $request->name_en, 'is_active'=>$request->is_active];
        N_educationlevel::create($update);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.nom.educationlevels.index');*/
				return redirect()->route('nom.educationlevels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_educationlevel  $n_educationlevel
     * @return \Illuminate\Http\Response
     */
    public function show(N_educationlevel $n_educationlevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_educationlevel  $n_educationlevel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_education_level = N_educationlevel::findOrFail($id);
        //dd($n_computerskill);
        return view('admin.nom.educationlevels.edit', compact('n_education_level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_educationlevel  $n_educationlevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            /*'name_en' => 'required',*/
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'name_en' => $request->name_en, 'is_active'=>$request->is_active];
					/*dd($update);*/
          N_educationlevel::where('id',$id)->update($update);

          /*return redirect()->route('nom.educationlevels.index');*/
					return redirect()->route('nom.educationlevels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_educationlevel  $n_educationlevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_educationlevel $n_educationlevel)
    {
        //
    }
		
		
    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'name' => 'reqiured',
        /*'name_en'=> 'required',*/
        'is_active'=>'required',
      ]);
    }

}
