<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\RegReq\registrationrequest;
use App\Models\Agency\recruitmentagencyprototype;
use App\Models\General\legalentity;
use App\Models\Nom\N_company_type;

class RegistrationRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //normalize $request
        //dump($request);
        $company_types = N_company_type::all();
        $requests_agency = registrationrequest::filter($request)->agency();

        return view('expert.requests.registration.index', compact('requests_agency', 'company_types', 'request'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get all legal entities containing this name
        $legalentity = legalentity::query();
        if ( $request->has('name') && trim($request->input('name')) !== '' )
        {
          $legalentity = $legalentity->where('name', 'LIKE', trim($request->input('name')) . '%');
        }
        $legalentity = $legalentity->get()->pluck('id');
        $agency = recruitmentagencyprototype::whereIn('legalentity_id', $legalentity)->get()->pluck('id');
        $requests_agency = registrationrequest::whereIn('recruitmentagency_id', $agency)->get();
        //dd($requests_agency);

        //$requests_agency = $requests_agency->paginate(5);    //get();

        return view('expert.registration.store', compact('requests_agency'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registrationrequest  $registrationrequest
     * @return \Illuminate\Http\Response
     */
    public function show(registrationrequest $registrationrequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registrationrequest  $registrationrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(registrationrequest $registrationrequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registrationrequest  $registrationrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registrationrequest $registrationrequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registrationrequest  $registrationrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(registrationrequest $registrationrequest)
    {
        //
    }
}
