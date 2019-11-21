<?php
/*	File:	App\Http\Controllers\powr_bo\PowrRegisteredController.php
		 Ver:	1.00.003
 Purpose:	POWR Backoffice Registered Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\powr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use Gate;
use DB;
use App\Models\General\Snumber;
use App\Models\POWR\Registration\RegPOWR;

class PowrSRMController extends Controller
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


	 $person_id =  Auth::user()->person_id;
       $powr_regs = DB::table('recruitmentagencyprototype')

                ->leftJoin('legalentity','legalentity.id','=','legalentity_id')

		->where('submittor_id','=',$person_id)
		->select('legalentity.*','recruitmentagencyprototype.*','recruitmentagencyprototype.id as protoId')
                 ->paginate(10,array('legalentity.*','recruitmentagencyprototype.*','protoId'));


	 info("ISDEL=!!!==============");
		;

	 info('ASDF');
	info($powr_regs);

        //return view('powr_bo.registered.index', compact('powr_regs','powr_eik'));
        return view('powr.srm.index', compact('powr_regs'));
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
