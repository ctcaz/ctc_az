<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nom\N_company_type;
use App\Models\Nom\N_country;
use App\Models\Nom\N_region;
use App\Models\Nom\N_municipality;
use App\Models\Nom\N_city;
use App\Models\RegReq\registrationrequest;
use App\Models\General\Snumber;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $company_types = N_company_type::all();
          $countries = N_country::active()->get();
          $regions = N_region::all()->pluck('name', 'id');
          $municipalities = N_municipality::all()->pluck('name', 'id');
          $cities = N_city::all();
          return view('application', compact('company_types','countries','regions','municipalities','cities'));
    }

    public function getMuni($id)
    {
        $munies = N_municipality::where('region_id', $id)->pluck('name', 'id');

        return json_encode($munies);
    }

    public function getCity($id)
    {
        $cities = N_city::where('muni_id', $id)->pluck('name', 'id');

        return json_encode($cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $company_types = N_company_type::all();
        $countries = N_country::active()->get();
        $regions = N_region::all()->pluck('name', 'id');
        $municipalities = N_municipality::all()->pluck('name', 'id');
        $cities = N_city::all();
        return view('application', compact('count','company_types','countries','regions','municipalities','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Find the last number for this table in snumbers
        $lastID = Snumber::where('table_name', 'registrationrequest')->first();
        $count  = 1;
        if ($lastID <> null) {
            $count  = $lastID->last_number;
            $count ++;
        }
        //update the last number

        $input2 = ['last_number' => $count];
        $lastID = Snumber::where('id',$lastID->id)->update($input2);

        //Create a new registrationrequest
        $input = ['id' => $count, 'state'=>'Подадена', 'status'=>'Получено ID'];
        $regReq = registrationrequest::create($input);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('welcome');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validatedData()
    {
        return request()->validate([
          'id' => 'required',
          'state' => '',
          'status' => '',
          'applicant_id' => '',
          'recruitmentagency_id' => '',
        ]);
    }
}
