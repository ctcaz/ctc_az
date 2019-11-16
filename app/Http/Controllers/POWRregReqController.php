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

use App\Models\General\person;


use App\Models\General\Office;
use App\Models\General\legalentity;



use App\Models\Agency\rap_servicetype;
use App\Models\Agency\rap_office;
use App\Models\RegReq\registrationrequest;
use App\Models\Agency\recruitmentagencyprototype;





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
        $cities = N_city::where('muni_id', $id)->where('parent_id', null)->pluck('name', 'id');

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

			//	$count = Snumber::getLastNumber((new RegPOWR)->getTable());
				info("TEST_INFO");
				info($request);
				//$maddr = new Address().
				//$maddr->country_id = 1;
				//$maddr_id = Snumber::getLastNumber((new Address)->getTable());

				$arrOffices = explode("*",$request->addedOffices);
					

				                  $mmaddrid =  Address::max('id')+1;

                                        $mmaddra = [
                                                                        'id' => $mmaddrid,
                                                                        'dtype' => '1',
                                                                        'country_id' => $request->mAddrCountry ,
                                                                        'region_id' => $request->mAddrRegion,
                                                                        'municipality_id' => $request->mAddrMuni,
                                                                        'city_id' => $request->mAddrCity,
                                                                        'district_id' =>  $request->mAddrCityDistr,
                                                                        'street' => $request->mAddr


                                                                        ];
                                $mmaddr = Address::create($mmaddra);
                                $mmaddr->save();

				/*,
  'mAddrCountry' => '1',
  'mAddrRegion' => 'Моля, изберете',
  'mAddrMuni' => 'Моля, изберете',
  'mAddrCity' => 'Моля, изберете',
  'mAddrCityDistr' => 'Моля, изберете',
  'mAddr' => NULL,i
				 */

        $cmaddrid = address::max('id')+1;

                                        $cmaddra = [
                                                                        'id' => $cmaddrid,
                                                                        'dtype' => '1',
                                                                        'country_id' => $request->cAddrCountry ,
                                                                        'region_id' => $request->cAddrRegion,
                                                                        'municipality_id' => $request->cAddrMuni,
                                                                        'city_id' => $request->cAddrCity,
                                                                        'district_id' =>  $request->cAddrCityDistr,
                                                                        'street' => $request->cAddr


                                                                        ];
                                $cmaddr = address::create($cmaddra);
                                $cmaddr->save();




/*
  'cAddrCountry' => '1',
  'cAddrRegion' => '0',
  'cAddrMuni' => 'Моля, изберете',
  'cAddrCity' => 'Моля, изберете',
  'cAddrCityDistr' => 'Моля, изберете',
  'cAddr' => NULL,
  'cAddr12' => NULL,
  'addedOffices' => NULL,
)
osboxes@osboxes:/var/www/htm


 * */
//
                                $perid =  person::max('id')+1;
                                $mper = [
                                                                        'id' => $perid,
  'givenname' => $request->applicantFirstName ,
  'familyname' =>  $request->applicantSecondName  ,
  'surname' =>  $request->applicantLastName,
  'identifier' =>  $request->applicantEgnLnch,
  'lnch' =>  $request->applicantLnchFlag,
  'email' =>  $request->applicantEmail,
  'position' =>  $request->applicantPosition
                                                                        ];
                                $mperM= person::create($mper);
                                $mperM->save();
				//////////////////////////////////////////////
       $leid =  legalentity::max('id')+1;
                                $mle = [
         'id' => $leid,
  'dtype' => '1' ,
  'name' =>  $request->legalEntityName ,
  'zzldcode' =>  $request->legalEntityZzldcode,
  'uic' =>  $request->legalEntityUicBulstat,
  'type_id' =>  $request->legalEntityType,
  'foreigncountrydocument' =>  $request->inlineRadioOptions,
  'foreigncountryidentifier' =>  ''
                                                                        ];
                                $mleM= legalentity::create($mle);
                                $mleM->save();



//id DECIMAL(19,0)
///apiuser DECIMAL(1,0)
///eurespartner DECIMAL(1,0)
//lastupdated TIMESTAMP
//correspondenceaddress_id DECIMAL(19,0)
//managementaddress_id DECIMAL(19,0)
//legalentity_id DECIMAL(19,0)
// recruitmentagencyprototype
  $rapid =  recruitmentagencyprototype::max('id')+1;
                                $rap = [
         'id' => $rapid,
  'lastupdated' =>  now() ,
  'managementaddress_id' =>  $cmaddrid,
  'correspondenceaddress_id' =>  $mmaddrid,
  'legalentity_id' =>  $leid

                                                                        ];
                                $rapM= recruitmentagencyprototype::create($rap);
                                $rapM->save();




				foreach($arrOffices as $arrOffice){


                                        $arrOfficeVals = explode("|",$arrOffice);
                                        if(count($arrOfficeVals)==9){
                                        $districtVal = $arrOfficeVals[4];
                                        if( $districtVal == '' OR $districtVal == 'null' ) $districtVal = '-9999';
                                        $maddrid =  Address::max('id')+1;

                                        $maddra = [
                                                                        'id' => $maddrid,
                                                                        'dtype' => '1',
                                                                        'country_id' => $arrOfficeVals[0] ,
                                                                        'region_id' => $arrOfficeVals[1],
                                                                        'municipality_id' => $arrOfficeVals[2],
                                                                        'city_id' => $arrOfficeVals[3],
                                                                        'district_id' =>  $districtVal,
                                                                        'street' => $arrOfficeVals[5]

                                                                        ];
                                $maddr = Address::create($maddra);
                                $maddr->save();
                                //
                                $moffid =  Office::max('id')+1;
                                $moffice = [
                                                                        'id' => $moffid,
                                                                        'address_id' => $maddrid,
                                                                        'dtype' => 1 ,
                                                                        'email' => $arrOfficeVals[6],
                                                                        'phone' => $arrOfficeVals[7],
                                                                        'othercontactperson' => $arrOfficeVals[8]
                                                                        ];
                                $mofficeM = Office::create($moffice);
                                $mofficeM->save();

					

				//$rap_office_id =  rap_office::max('id')+1;
				$rap_office_m = [

					'recruitmentagencyprototype_id'=>$rapid,
					'offices_id'=>$moffid
                                                                        ];
                                $rap_office_mM= rap_office::create($rap_office_m);
                                $rap_office_mM->save();
					}
                                }
				// registrationrequest
				
				$registrationrequest_id =  registrationrequest::max('id')+1;
                                $registrationrequest_m = [
                                        'id'=>$registrationrequest_id,
          'state' => 'Получено ПОВР',
          'status' => 'Подадена',
          'lastupdated' => now(),
	  'applicant_id'=>$perid,
	  'recruitmentagency_id'=>$rapid 


                                                                        ];
                                $registrationrequest_mM = registrationrequest::create($registrationrequest_m);
                                $registrationrequest_mM->save();




/*
id DECIMAL(19,0)
datefrom DATE
dateto DATE
lastupdated TIMESTAMP
rejectionreason VARCHAR(255)
status VARCHAR(255)
type VARCHAR(255)
applicant_id DECIMAL(19,0)
recruitmentagency_id DECIMAL(19,0)
 */




                                //$maddr_id = Address::newAddress($maddr);

        //Create a new registrationrequest
			
			
			
			
//	$input = ['id' => $count, 'state'=>'Подадена', 'status'=>'Получено ID'];
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
