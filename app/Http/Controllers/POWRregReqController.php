<?php
/*	File:	App\Http\Controllers\Nom\POWRregReqController.php
		 Ver:	1.00.003
 Purpose:	POWR Registration Request Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nom\N_company_type;
use App\Models\Nom\N_country;
use App\Models\Nom\N_region;
use App\Models\Nom\N_municipality;
use App\Models\Nom\N_city;
use App\Models\General\Snumber;
use App\Models\General\Address;
use App\Models\POWR\Registration\RegPOWR;

class POWRregReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$company_types = N_company_type::all();
			//$countries = N_country::active()->get();
			$countries = N_country::active()->where('id',1)->get();
			$regions = N_region::all()->pluck('name', 'id');
			$municipalities = N_municipality::all()->pluck('name', 'id');
			$cities = N_city::all();
			return view('powr_regreq', compact('company_types','countries','regions','municipalities','cities'));
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

    public function getCityDistrict($city_id)
    {
        //$cities = N_city::where('muni_id', $id)->pluck('name', 'id');
				//$cities = N_city::where('id', $id);
				$city_districts =N_city::where('parent_id',$city_id)
																	//where('muni_id', $cities->muni_id)
																//->where('parent_id',$id)
																->pluck('name', 'id');

        return json_encode($city_districts);
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
        /*return view('application', compact('count','company_types','countries','regions','municipalities','cities'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			/*
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
			*/
				
				$count = Snumber::getLastNumber((new RegPOWR)->getTable());

				//$maddr = new Address().
				//$maddr->country_id = 1;
				//$maddr_id = Snumber::getLastNumber((new Address)->getTable());
				$maddr = [
									/*'id' => $maddr_id,*/
									'dtype' => '1',
									'country_id' => '1', 
									'region_id' => '1', 
									'municipality_id' => '1', 
									'setlement_id' => '1', 
									'district_id' => '1', 
									'street' => 'Dunav str.'
									];
				//Address::create($maddr);
				
				$maddr = new Address.
				//$maddr->dtype = "jlkjlkjl";
				$maddr->save();
				
				
				//$maddr_id = Address::newAddress($maddr);

        //Create a new registrationrequest
        $input = ['id' => $count, 'state'=>'Подадена', 'status'=>'Получено ID'];
        //$regReq = registrationrequest::create($input);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('welcome');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\POWR\Registration\RegPOWR  $regPOWR
     * @return \Illuminate\Http\Response
     */
    public function show(RegPOWR $regPOWR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\POWR\Registration\RegPOWR  $regPOWR
     * @return \Illuminate\Http\Response
     */
    public function edit(RegPOWR $regPOWR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\POWR\Registration\RegPOWR  $regPOWR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegPOWR $regPOWR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\POWR\Registration\RegPOWR  $regPOWR
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegPOWR $regPOWR)
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
