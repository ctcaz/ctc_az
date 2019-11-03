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
use App\Models\General\person;
use App\Models\General\legalentity;
use App\Models\Agency\recruitmentagencyprototype;

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
        //Create a new company for this request
        $count = Snumber::getLastNumber('legalentity');
        $input = [
          'id' => $count,
          'name' => $request->comp_name,
          'uic' => $request->bulstat,
          'type_id' => $request->comp_type,
        ];
        $legalentity = legalentity::create($input);
        $legalentity = legalentity::find($count);

        //Create a prototype agency
        $count = Snumber::getLastNumber('recruitmentagencyprototype');
        $update = now();
        $input = [
          'id' => $count,
          'lastupdated' => $update,
        ];
        $prototype = recruitmentagencyprototype::create($input);
        $prototype = recruitmentagencyprototype::find($count);

        //Connect Agency Prototype and Legal entity
        $prototype->legalentity_id = $legalentity->id;
        $prototype->save();

        //Create a new person for this request
        $count = Snumber::getLastNumber('person');
        $input = [
          'id' => $count,
          'givenname' => $request->givenname,
          'surname' => $request->surname,
          'familyname' => $request->familyname,
          'email' => $request->email,
          'position' => $request->position,
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
