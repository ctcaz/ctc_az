<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\registrationrequest;
use Gate;
use Illuminate\Http\Request;

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
    public function index()
    {
        if(Gate::denies('expert-user')){
          return redirect(route('logout'));
        };

        //$registrationrequest = registrationrequest::all(); //passing the users data to the view
        return view('expert.requests.registration.index');

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
        //
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
