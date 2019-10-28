<?php
/*
		File:	App\Http\Controllers\Nom\ComputerskillsController.php
		 Ver:	1.00.003
 Purpose:	Computer skills Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_computerskills;

class ComputerskillsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_computer_skills = N_computerskills::paginate(10); //active()->
         
				 return view('admin.nom.computerskills.index', compact('n_computer_skills'));

					/*
					$id = Snumber::getLastNumber('n_computer_skills');
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
        return view('admin.nom.computerskills.create');
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
				$id = Snumber::getLastNumber('n_computer_skills');

        //Create a new currency
				$update = new N_computerskills();
        $update = ['id'=>$id, 'name' => $request->name, 'description' => $request->description, 'is_active'=>$request->is_active];
        N_computerskills::create($update);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.nom.computerskills.index');*/
				return redirect()->route('nom.computerskills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_computerskills  $n_computerskill
     * @return \Illuminate\Http\Response
     */
    public function show(N_computerskills $n_computerskill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_computerskills  $n_computerskill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_computer_skills = N_computerskills::findOrFail($id);
        //dd($n_computerskill);
        return view('admin.nom.computerskills.edit', compact('n_computer_skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_computerskills  $n_computerskill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            'description' => 'required',
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'description' => $request->description, 'is_active'=>$request->is_active];
					/*dd($update);*/
          N_computerskills::where('id',$id)->update($update);

          /*return redirect()->route('nom.computerskills.index');*/
					return redirect()->route('nom.computerskills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_computerskills  $n_computerskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_computerskills $n_computerskill)
    {
        //
    }
		
		
    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'name' => 'reqiured',
        'description'=> 'required',
        'is_active'=>'required',
      ]);
    }

}
