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

class PowrRegistrationRequestsController extends Controller
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

	 
	 info("ISDEL=!!!==============");
	    $powr_regrequests = DB::table('recruitmentagencyprototype')	
		->join('legalentity','legalentity.id','=','legalentity_id')		
		
		->join('n_company_types','code','=','type_id')

		->groupBy('legalentity_id','n_company_types.name')

		->select('legalentity_id', 'legalentity.*', 'n_company_types.name as companytype',DB::RAW('max(recruitmentagencyprototype.id) as maxPrototypeId')) 
	//	->select( 'legalentity_id',DB::RAW('max(recruitmentagencyprototype.id) as maxPrototypeId')) 
	//	->having(DB::RAW('max(recruitmentagencyprototype.id)'))
		
		->orderBy('maxPrototypeId', 'desc')
		
//		->join('n_company_types','code','=','type_id')	
		//->where('recruitmentagencyprototype.status','=','Подадена')

		->where('recruitmentagencyprototype.status','<>','АКТИВНА РЕГИСТРАЦИЯ')
	//	->where('recruitmentagencyprototype.state','=','Получено ID')
		
	//	->get()
              //->get(['registrationrequest.*','legalentity.*','n_company_types.name as ctypeName','maddr.street as m_street','caddr.street as c_street'])
	//    info("-------------------------=--------------------");
	 //   info($powr_regrequests);
             ->paginate(10,array('legalentity.*','maxPrototypeId'))
		;

	 info('ASDF');
	info($powr_regrequests);

        //return view('powr_bo.registered.index', compact('powr_regs','powr_eik'));
        return view('powr_bo.registrationrequests.index', compact('powr_regrequests'));
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
