<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\changerequest;
use Gate;
use Illuminate\Http\Request;

class ChangeRequestController extends Controller
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
        return view('expert.requests.changes.index');
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
     * @param  \App\changerequest  $changerequest
     * @return \Illuminate\Http\Response
     */
    public function show(changerequest $changerequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\changerequest  $changerequest
     * @return \Illuminate\Http\Response
     */
    public function edit(changerequest $changerequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\changerequest  $changerequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, changerequest $changerequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\changerequest  $changerequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(changerequest $changerequest)
    {
        //
    }
}
