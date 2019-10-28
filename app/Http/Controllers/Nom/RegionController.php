<?php
/*
		File:	App\Http\Controllers\Nom\RegionController.php
		 Ver:	1.00.003
 Purpose:	Region Controller
Author/s:	Antoan Georgiev
					Christopher Georgiev	
 Created:	2019-10-07
	Modify:	2019-10-27
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use App\N_region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n_regions = N_region::paginate(10);

        return view('admin.nom.regions.index', compact('n_regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				return view('admin.nom.regions.create');
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
				$id = Snumber::getLastNumber('n_regions');

        //Create a new gender
				$update = new N_region();
        $update = ['id'=>$id, 'name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
        N_region::create($update);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('nom.regions.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\N_region  $n_region
     * @return \Illuminate\Http\Response
     */
    public function show(N_region $n_region)
    {
        dd($n_region);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\N_region  $n_region
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_regions = N_region::findOrFail($id);
        //dd($n_gender);
        return view('admin.nom.regions.edit', compact('n_regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\S_gender  $s_gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $n_regions, $id)
    {
        $n_regions->validate([
          'name' => 'required',
          'code' => 'required',
          'is_active' => 'required',
        ]);
        $update = ['name' => $n_regions->name, 'code' => $n_regions->code, 'is_active'=>$n_regions->is_active];
        N_region::where('id',$id)->update($update);

        return redirect()->route('nom.regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\N_region  $n_region
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_region $n_region)
    {
        //
    }
}
