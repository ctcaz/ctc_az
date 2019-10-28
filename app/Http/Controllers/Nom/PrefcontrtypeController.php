<?php
/*
		File:	App\Http\Controllers\Nom\PrefcontrtypeController.php
		 Ver:	1.00.003
 Purpose:	Preffered contract type Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_prefcontrtype;

class PrefcontrtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_preffered_contract_type = N_prefcontrtype::paginate(10); //active()->
         
				 return view('admin.nom.prefcontrtypes.index', compact('n_preffered_contract_type'));
				  
					/*
					$id = Snumber::getLastNumber('n_preffered_contract_type');
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
        return view('admin.nom.prefcontrtypes.create');
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
				$id = Snumber::getLastNumber('n_preffered_contract_type');

        //Create a new prefcontrtypes
				$update = new N_prefcontrtype();
        $update = ['id'=>$id, 'name' => $request->name, 'old_code' => $request->old_code, 'is_active'=>$request->is_active];
        N_prefcontrtype::create($update);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('nom.prefcontrtypes.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_prefcontrtype  $n_prefcontrtype
     * @return \Illuminate\Http\Response
     */
    public function show(N_prefcontrtype $n_prefcontrtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_prefcontrtype  $n_prefcontrtype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_preffered_contract_type = N_prefcontrtype::findOrFail($id);
        //dd($n_prefcontrtype);
        return view('admin.nom.prefcontrtypes.edit', compact('n_preffered_contract_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_prefcontrtype  $n_prefcontrtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            /*'code' => 'required',*/
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'old_code' => $request->old_code, 'is_active'=>$request->is_active];
          N_prefcontrtype::where('id',$id)->update($update);

          //return redirect()->route('admin.nom.prefcontrtypes.index');
					return redirect()->route('nom.prefcontrtypes.index');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_prefcontrtype  $n_prefcontrtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_prefcontrtype $n_prefcontrtype)
    {
        //
    }
		
		
    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        /*'code' => 'reqiured',*/
        'name'=> 'required',
        'is_active'=>'required',
      ]);
    }

}
