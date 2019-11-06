<?php
/*
		File:	App\Http\Controllers\Nom\CarcategoryController.php
		 Ver:	1.00.003
 Purpose:	Carcategory/Driver licence Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_carcategory;

class CarcategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_car_categories = N_carcategory::paginate(10); //active()->

				 return view('admin.nom.carcategory.index', compact('n_car_categories'));

					/*
					$id = Snumber::getLastNumber('n_car_categories');
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
        return view('admin.nom.carcategory.create');
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
				$id = Snumber::getLastNumber('n_car_categories');

        //Create a new currency
				$update = new N_carcategory();
        $update = ['id'=>$id, 'category' => $request->category, 'description' => $request->description, 'is_active'=>$request->is_active];
        N_carcategory::create($update);

        //registrationrequest::create($this->validatedData());

        //return redirect()->route('admin.nom.carcategory.index');;
        return redirect()->route('nom.carcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_carcategory  $n_carcategory
     * @return \Illuminate\Http\Response
     */
    public function show(N_carcategory $n_carcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_carcategory  $n_carcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_carcategory = N_carcategory::findOrFail($id);
        //dd($n_carcategory);
        return view('admin.nom.carcategory.edit', compact('n_carcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_carcategory  $n_carcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'category' => 'required',
            'description' => 'required',
            'is_active' => 'required',
          ]);
          $update = ['category' => $request->category, 'description' => $request->description, 'is_active'=>$request->is_active];
          N_carcategory::where('id',$id)->update($update);
          //dd($update);


          return redirect()->route('nom.carcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_carcategory  $n_carcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_carcategory $n_carcategory)
    {
        //
    }


    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'category' => 'reqiured',
        'description'=> 'required',
        'old_code'=>'required',
      ]);
    }

}
