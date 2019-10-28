<?php
/*
		File:	App\Http\Controllers\Nom\SADirectorateController.php
		 Ver:	1.00.003
 Purpose:	SA Directorate Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_sadirectorate;

class SADirectorateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_sadirectorate = N_sadirectorate::paginate(10); //active()->
         
				 return view('admin.nom.sadirectorates.index', compact('n_sadirectorate'));

					/*
					$id = Snumber::getLastNumber('n_sadirectorate');
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
        //return view('admin.nom.sadirectorates.create');
				return view('admin.nom.sadirectorates.create');
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
				$id = Snumber::getLastNumber((new N_sadirectorate)->getTable());

        //Create a new currency
				$update = new N_sadirectorate();
        $update = ['id'=>$id, 
									  'name' => $request->name, 
										'code' => $request->code, 
										
										'parent_id' => $request->parent_id, 
										'res_dir_id' => $request->res_dir_id, 
										'phone' => $request->phone, 
										'address_city' => $request->address_city, 
										'address_district' => $request->address_district, 
										'address_zip' => $request->address_zip, 
										'address' => $request->address, 
										'email' => $request->email, 
										'phone_ais' => $request->phone_ais, 
										'address_region' => $request->address_region, 
										'address_muni' => $request->address_muni, 
										'bic' => $request->bic, 
										'iban' => $request->iban, 
										'director' => $request->director, 
										'eik' => $request->eik, 

										'is_active'=>$request->is_active];
        N_sadirectorate::create($update);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.nom.sadirectorates.index');*/
				return redirect()->route('nom.sadirectorates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_sadirectorate  $n_sadirectorate
     * @return \Illuminate\Http\Response
     */
    public function show(N_sadirectorate $N_sadirectorate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_sadirectorate  $n_sadirectorate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_sadirectorate = N_sadirectorate::findOrFail($id);
        //dd($n_computerskill);
        return view('admin.nom.sadirectorates.edit', compact('n_sadirectorate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_sadirectorate  $n_sadirectorate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            /*'code' => 'required',*/
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 
										'code' => $request->code, 

										'parent_id' => $request->parent_id, 
										'res_dir_id' => $request->res_dir_id, 
										'phone' => $request->phone, 
										'address_city' => $request->address_city, 
										'address_district' => $request->address_district, 
										'address_zip' => $request->address_zip, 
										'address' => $request->address, 
										'email' => $request->email, 
										'phone_ais' => $request->phone_ais, 
										'address_region' => $request->address_region, 
										'address_muni' => $request->address_muni, 
										'bic' => $request->bic, 
										'iban' => $request->iban, 
										'director' => $request->director, 
										'eik' => $request->eik, 

										'is_active'=>$request->is_active];
					/*dd($update);*/
          N_sadirectorate::where('id',$id)->update($update);

          /*return redirect()->route('nom.sadirectorates.index');*/
					return redirect()->route('nom.sadirectorates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_sadirectorate  $n_sadirectorate
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_sadirectorate $n_sadirectorate)
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
