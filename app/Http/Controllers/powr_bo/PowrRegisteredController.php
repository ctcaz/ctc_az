<?php
/*	File:	App\Http\Controllers\powr_bo\PowrRegisteredController.php
		 Ver:	1.00.003
 Purpose:	POWR Backoffice Registered Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\powr_bo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use DB;
use App\Models\General\Snumber;
use App\Models\POWR\Registration\RegPOWR;

class PowrRegisteredController extends Controller
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
        //
        $powr_regs = RegPOWR::paginate(10); //active()->
        $powr_eik = "205740423";

        $powr_regs = DB::table('registrationrequest')
              ->join('recruitmentagency', 'recruitmentagency.id', '=', 'registrationrequest.applicant_id')
              ->join('legalentity', 'legalentity.id', '=', 'recruitmentagency.legalentity_id')
              ->get()->paginate(10)
        ;


        //return view('powr_bo.registered.index', compact('powr_regs','powr_eik'));
        return view('powr_bo.registered.index', compact('powr_regs'));
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
}
