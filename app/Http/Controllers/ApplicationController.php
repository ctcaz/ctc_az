<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Nom\N_company_type;
use App\Models\Nom\N_country;
use App\Models\Nom\N_region;
use App\Models\Nom\N_municipality;
use App\Models\Nom\N_city;
use App\Models\RegReq\registrationrequest;
use App\Models\General\Snumber;
use App\Models\General\person;
use App\Models\General\Address;
use App\Models\General\legalentity;
use App\Models\Agency\recruitmentagencyprototype;
use App\Models\Agency\rap_territorialscope;
use App\Models\Agency\rap_servicetype;

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
        $cities = N_city::where('muni_id', $id)->where('parent_id', null)->pluck('name', 'id');

        return json_encode($cities);
    }

    public function getCityDistrict($city_id)
    {
				$city_districts =N_city::where('parent_id',$city_id)->pluck('name', 'id');

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
        dd($request);
        //Log::info($request);
        //Create a new company for this request
        $count = Snumber::getLastNumber('legalentity');
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
        $count = Snumber::getLastNumber('recruitmentagencyprototype');
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
        $count = Snumber::getLastNumber('address');
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

        //Correspondence address
        $count = Snumber::getLastNumber('address');
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

        //Create a new person for this request
        $count = Snumber::getLastNumber('person');
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
        //lnch

        //Create a new registrationrequest
        $count = Snumber::getLastNumber('registrationrequest');
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
        //dd($regReq->id);



        return redirect()->route('welcome');;
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
