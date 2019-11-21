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
        //$powr_regs = RegPOWR::paginate(10); //active()->
        //$powr_eik = "205740423";

<<<<<<< HEAD
        $powr_regs = DB::table('recruitmentagencyprototype')
              ->where('recruitmentagencyprototype.status','=','АКТИВНА РЕГИСТРАЦИЯ')
              ->join('registrationrequest', 'recruitmentagencyprototype.id', '=', 'registrationrequest.applicant_id')
=======
        $powr_regs = DB::table('registrationrequest')
              ->where('state','LIKE','%ПОВР%')
              ->join('recruitmentagencyprototype', 'recruitmentagencyprototype.id', '=', 'registrationrequest.applicant_id')
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
              ->join('legalentity', 'legalentity.id', '=', 'recruitmentagencyprototype.legalentity_id')
              ->join('n_company_types', 'n_company_types.id', '=', 'legalentity.type_id')
              ->join('address as maddr', 'maddr.id', '=', 'recruitmentagencyprototype.managementaddress_id')
              ->join('registration','registration.recruitmentagency_id','=','recruitmentagencyprototype.id','left outer')
              ->join('rap_office','rap_office.recruitmentagencyprototype_id','=','recruitmentagencyprototype.id')
              ->join('office','office.id','=','rap_office.offices_id')
              //->join('address as caddr', 'caddr.id', '=', 'recruitmentagencyprototype.correspondenceaddress_id')
              ->join('address as caddr', 'caddr.id', '=', 'office.address_id')
              //->get(['registrationrequest.*','legalentity.*','n_company_types.name as ctypeName','maddr.street as m_street','caddr.street as c_street'])
              ->paginate(10,array('registrationrequest.*','legalentity.*','n_company_types.name as ctypeName','maddr.street as m_street','caddr.street as c_street','registration.certificatevalidity as date_valid'))
              //->paginate(10,array('registrationrequest.*','legalentity.*','n_company_types.name as ctypeName','maddr.street as m_street','caddr.street as c_street','registration.certificatevalidity as date_valid'))
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
