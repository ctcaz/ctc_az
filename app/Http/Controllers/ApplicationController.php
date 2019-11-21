<?php

namespace App\Http\Controllers;

use App\Models\General\DocumentType;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Nom\N_company_type;
use App\Models\Nom\N_country;
use App\Models\Nom\N_region;
use App\Models\Nom\N_municipality;
use App\Models\Nom\N_city;
use App\Models\RegReq\registrationrequest;
use App\Models\RegReq\request_type;
use App\Models\General\Snumber;
use App\Models\General\person;
use App\Models\General\Address;
use App\Models\General\legalentity;
use App\Models\General\office;
use App\Models\General\baserepresentative;
use App\Models\Agency\recruitmentagencyprototype;
use App\Models\Agency\rap_territorialscope;
use App\Models\Agency\rap_servicetype;
use App\Models\Agency\rap_baserepresentative;
use App\Models\Agency\rap_office;

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
          $docTypes = DocumentType::all();
          return view('application', compact(
              'company_types','countries','regions','municipalities','cities', 'docTypes'));
    }

    public function getMuni($id)
    {
        $munies = N_municipality::where('region_id', $id)->orderBy('name', 'desc')->pluck('name', 'id');

        return json_encode($munies);
    }

    public function getCity($id)
    {
        $cities = N_city::where('muni_id', $id)->where('parent_id', null)->orderBy('name', 'desc')->pluck('name', 'id');

        return json_encode($cities);
    }

    public function getCityDistrict($id)
    {
				$city_districts =N_city::where('parent_id',$id)->orderBy('name', 'desc')->pluck('name', 'id');
        //dd($city_districts);
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
        return view('application', compact(
            'company_types','countries','regions','municipalities','cities', 'docTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        //Log::info($request);
        //Create a new company for this request
        //$count = Snumber::getLastNumber('legalentity');
        $count =  legalentity::max('id')+1;
        $input = [
          'id' => $count,
          'name' => $request->comp_name,
          'uic' => $request->bulstat,
          'zzldcode' => $request->comp_zzld,
          'type_id' => $request->comp_type,
        ];
        $legalentity = legalentity::create($input);
        $legalentity = legalentity::find($count);

        //Create a prototype agency
//        $count = Snumber::getLastNumber('recruitmentagencyprototype');
        $count =  recruitmentagencyprototype::max('id')+1;
        $update = now();
        $apiuser = 0;
        if ($request->apiuser == 1) {
          $apiuser = 1;
        }
        $eurespartner = 0;
        if ($request->eurespartner == 1) {
          $eurespartner = 1;
        }
        $input = [
          'id' => $count,
          'apiuser' => $apiuser,
          'eurespartner' => $eurespartner,
          'lastupdated' => $update,
        ];
        $prototype = recruitmentagencyprototype::create($input);
        $prototype = recruitmentagencyprototype::find($count);

        //Connect Agency Prototype and Legal entity
        $prototype->legalentity_id = $legalentity->id;
        $prototype->save();

        //Headquarters address
        //$count = Snumber::getLastNumber('address');
        $count =  Address::max('id')+1;
        $input = [
          'id' => $count,
          'country_id' => $request->mCountry,
          'region_id' => $request->mAddrRegion,
          'municipality_id' => $request->mAddrMuni,
          'setlement_id' => $request->mAddrCity,
          'district_id' => $request->mAddrCityDistr,
          'street' => $request->mAddr,
        ];
        $address = Address::create($input);
        $address = Address::find($count);

        //Connect Agency Prototype to Headquarters Address
        $prototype->managementaddress_id = $address->id;
        $prototype->save();

        //Check if the correspondence address is the same as the headquarter's
        if ($request->c_as_m !== 'on') {
          //echo "on";
          //Correspondence address
<<<<<<< HEAD
          $count = Snumber::getLastNumber('address');
=======
          //$count = Snumber::getLastNumber('address');
          $count =  Address::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $input = [
            'id' => $count,
            'country_id' => $request->cCountry,
            'region_id' => $request->cAddrRegion,
            'municipality_id' => $request->cAddrMuni,
            'setlement_id' => $request->cAddrCity,
            'district_id' => $request->cAddrCityDistr,
            'street' => $request->cAddr,
          ];
          $address = Address::create($input);
          $address = Address::find($count);
        }


        //Connect Agency Prototype to Headquarters Address
        $prototype->correspondenceaddress_id = $address->id;
        $prototype->save();

        //Territorial scopes
        //Bulgaria
        if ($request->ter_BG !== null) {
          $terScope = new rap_territorialscope();
          $terScope->territorialscopes = $request->ter_BG;
          $prototype->rap_territorialscope()->save($terScope);
        }

        //World
        if ($request->ter_World !== null) {
          $terScope = new rap_territorialscope();
          $terScope->territorialscopes = $request->ter_World;
          $prototype->rap_territorialscope()->save($terScope);
        }

        //Sailor
        if ($request->ter_Sailor !== null) {
          $terScope = new rap_territorialscope();
          $terScope->territorialscopes = $request->ter_Sailor;
          $prototype->rap_territorialscope()->save($terScope);
        }

        //Service types
        //Providing information and consulting
        if ($request->consulting !== null) {
          $services = new rap_servicetype();
          $services->servicetype = $request->consulting;
          $prototype->rap_servicetype()->save($services);
        }

        //Psychological help for active job seekers
        if ($request->psychology !== null) {
          $services = new rap_servicetype();
          $services->servicetype = $request->psychology;
          $prototype->rap_servicetype()->save($services);
        }

        //Training elders
        if ($request->elders !== null) {
          $services = new rap_servicetype();
          $services->servicetype = $request->elders;
          $prototype->rap_servicetype()->save($services);
        }

        //Moving to another city or country
        if ($request->moving !== null) {
          $services = new rap_servicetype();
          $services->servicetype = $request->moving;
          $prototype->rap_servicetype()->save($services);
        }

        //Representatives
        $people = array();
        $i = 1;
        while ($request->{'givenname_rep'.$i} !== null) {
          //Create a person for this representative
<<<<<<< HEAD
          $count = Snumber::getLastNumber('person');
=======
          //$count = Snumber::getLastNumber('person');
          $count =  person::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $lnch = 0;
          if ($request->{'lnch_rep'.$i} == 1) {
            $lnch = 1;
          }
          $input = [
            'id' => $count,
            'givenname' => $request->{'givenname_rep'.$i},
            'surname' => $request->{'surname_rep'.$i},
            'familyname' => $request->{'familyname_rep'.$i},
            'email' => $request->{'email_rep'.$i},
            'position' => $request->{'position_rep'.$i},
            'lnch' => $lnch,
            'identifier' => $request->{'identifier_rep'.$i},
          ];
          $person = person::create($input);
          $person = person::find($count);

          $people[$count] = $request->{'identifier_rep'.$i};

          //Create a base representative
<<<<<<< HEAD
          $count = Snumber::getLastNumber('baserepresentative');
=======
          //$count = Snumber::getLastNumber('baserepresentative');
          $count =  baserepresentative::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $input = [
            'id' => $count,
            'dtype' => 'rep',
            'active' => 1,
          ];
          $baserep = baserepresentative::create($input);
          $baserep = baserepresentative::find($count);

          //Connect the base representative with the Person
          $baserep->person_id = $person->id;
          $baserep->save();

          //Connect Agency Prototype and base representative
          $prototype->baserepresentative()->attach($baserep);

          $i++;
        }

        //Brokers
        $i = 1;
        while ($request->{'givenname_broker'.$i} !== null) {
          //echo $request->{'identifier_broker'.$i};
          //Create a person for this broker
<<<<<<< HEAD
          $count = Snumber::getLastNumber('person');
=======
          //$count = Snumber::getLastNumber('person');
          $count =  person::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $lnch = 0;
          if ($request->{'lnch_broker'.$i} == 1) {
            $lnch = 1;
          }
          $input = [
            'id' => $count,
            'givenname' => $request->{'givenname_broker'.$i},
            'surname' => $request->{'surname_broker'.$i},
            'familyname' => $request->{'familyname_broker'.$i},
            'email' => $request->{'email_broker'.$i},
            'position' => $request->{'position_broker'.$i},
            'lnch' => $lnch,
            'identifier' => $request->{'identifier_broker'.$i},
          ];
          $person = person::create($input);
          $person = person::find($count);

          $people[$count] = $request->{'identifier_broker'.$i};

          //Create a base representative
<<<<<<< HEAD
          $count = Snumber::getLastNumber('baserepresentative');
=======
          //$count = Snumber::getLastNumber('baserepresentative');
          $count =  baserepresentative::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $input = [
            'id' => $count,
            'dtype' => 'broker',
            'active' => 1,
          ];
          $baserep = baserepresentative::create($input);
          $baserep = baserepresentative::find($count);

          //Connect the base representative with the Person
          $baserep->person_id = $person->id;
          $baserep->save();

          //Connect Agency Prototype and base representative
          $prototype->baserepresentative()->attach($baserep);

          //Offices

          $i++;
        }

        $key = array_search($request->identifier, $people);

        if ($key > 0) {
          $person = person::find($key);
        } else {
          //Create an applicant for this request
<<<<<<< HEAD
          $count = Snumber::getLastNumber('person');
=======
          //$count = Snumber::getLastNumber('person');
          $count =  person::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $lnch = 0;
          if ($request->lnch == 1) {
            $lnch = 1;
          }
          $input = [
            'id' => $count,
            'givenname' => $request->givenname,
            'surname' => $request->surname,
            'familyname' => $request->familyname,
            'email' => $request->email,
            'position' => $request->position,
            'lnch' => $lnch,
            'identifier' => $request->identifier,
          ];
          $person = person::create($input);
          $person = person::find($count);
        }

        //Offices
        $i = 1;
        while ($request->{'oAddr'.$i} !== null) {
          //Create an office instance
<<<<<<< HEAD
          $count = Snumber::getLastNumber('office');
=======
          //$count = Snumber::getLastNumber('office');
          $count =  office::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $main_off = 0;
          if ($request->{'mainOffice'.$i} == 1) {
            $main_off = 1;
          }
          $input = [
            'id' => $count,
            'email' => $request->{'email_off'.$i},
            'fax' => $request->{'fax_off'.$i},
            'mainoffice' => $main_off,
            'othercontactperson' => $request->{'oContactPerson'.$i},
            'phone' => $request->{'tel_off'.$i},
            'dtype' => 'rap',
          ];

          $office = office::create($input);
          $office = office::find($count);

          //Find the contact person for this office
          $key = array_search($request->{'oContactPerson'.$i}, $people);
          if ($key > 0) {
            $person = person::find($key);
          }
          //Create a base representative
<<<<<<< HEAD
          $count = Snumber::getLastNumber('baserepresentative');
=======
          //$count = Snumber::getLastNumber('baserepresentative');
          $count =  baserepresentative::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $input = [
            'id' => $count,
            'dtype' => 'off',
            'active' => 1,
          ];
          $baserep = baserepresentative::create($input);
          $baserep = baserepresentative::find($count);
          //Connect the base representative with the Person
          $baserep->person_id = $person->id;
          $baserep->save();

          //Connect office and base representative
          $office->contactperson_id = $baserep->id;
          $office->save();

          //Office address
<<<<<<< HEAD
          $count = Snumber::getLastNumber('address');
=======
          //$count = Snumber::getLastNumber('address');
          $count =  Address::max('id')+1;
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
          $input = [
            'id' => $count,
            'country_id' => $request->{'oCountry'.$i},
            'region_id' => $request->{'oAddrRegion'.$i},
            'municipality_id' => $request->{'oAddrMuni'.$i},
            'setlement_id' => $request->{'oAddrCity'.$i},
            'district_id' => $request->{'oAddrCityDistr'.$i},
            'street' => $request->{'oAddr'.$i},
          ];
          $address = Address::create($input);
          $address = Address::find($count);

          //Connect the office to the Address
          $office->address_id = $address->id;
          $office->save();

          //connect office and rec prototype via rap_office
          $prototype->office()->attach($office);

          $i++;
        }

        //Create a new registrationrequest
        //$count = Snumber::getLastNumber('registrationrequest');
        $count =  registrationrequest::max('id')+1;
        $update = now();
        $input = [
          'id' => $count,
          'state' => 'Получено ID ЧТП',
          'status' => 'Подадена',
          'lastupdated' => $update,
        ];
        $regReq = registrationrequest::create($input);

        //associate with a reg request
        $regReq = registrationrequest::find($count);

        //Connect Registration Request with Person and Agency Prototype
        $regReq->applicant_id = $person->id;
        $regReq->recruitmentagency_id = $prototype->id;
        $regReq->save();

        //Define the reg request as ЧТП
        $reg_type = new request_type();
        $reg_type->request_id = $regReq->id;
        $reg_type->request_type = 'ЧТП';
        $reg_type->save();

        //dd($regReq->id);


        return redirect()->route('thanks');;
        //return redirect()->back();
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
