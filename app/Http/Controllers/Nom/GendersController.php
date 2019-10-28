<?php
/*
		File:	App\Http\Controllers\Nom\GendersController.php
		 Ver:	1.00.003
 Purpose:	Genders Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use App\Models\Nom\N_gender;
use App\Models\General\Snumber;
use Illuminate\Http\Request;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n_gender = N_gender::paginate(10); //active()->

         return view('admin.nom.genders.index', compact('n_gender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				return view('admin.nom.genders.create');
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
				$id = Snumber::getLastNumber('n_gender');

        //Create a new gender
				$update = new N_gender();
        $update = ['id'=>$id, 'name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
        N_gender::create($update);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('nom.genders.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\S_gender  $s_gender
     * @return \Illuminate\Http\Response
     */
    public function show(S_gender $s_gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\S_gender  $s_gender
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_gender = N_gender::findOrFail($id);
        //dd($n_gender);
        return view('admin.nom.genders.edit', compact('n_gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\S_gender  $s_gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
          'name' => 'required',
          'code' => 'required',
          'is_active' => 'required',
        ]);
        $update = ['name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
        N_gender::where('id',$id)->update($update);

        return redirect()->route('nom.genders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\S_gender  $s_gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(S_gender $s_gender)
    {
        //
    }
		
    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'code' => 'reqiured',
        'name'=> 'required',
        'is_active'=>'required',
      ]);
    }

}
