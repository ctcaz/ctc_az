<?php

namespace App\Http\Controllers\RA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Snumber;
use App\Models\Nom\N_professionclass;
use App\Models\Nom\N_profession;
use App\Models\Nom\N_currency;
use App\Models\Nom\N_workregime;
use App\Models\JV\jvspecification;


class JobsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('ra.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lvl1 = N_professionclass::active()->lvl1()->get();
        $lvl2 = N_professionclass::active()->lvl2()->get();
        $lvl3 = N_professionclass::active()->lvl3()->get();
        $lvl4 = N_profession::active()->get();

        $currencies = N_currency::active()->get();
        $regimes = N_workregime::active()->get();
        //dd($lvl1);

        return view('ra.jobs.create', compact('lvl1', 'lvl2', 'lvl3', 'lvl4', 'currencies', 'regimes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump($request->profession);
        //Create a new jvspecification
        $count = Snumber::getLastNumber('jvspecification');
        $update = now();
        $input = request()->validate([
          'professionspecialty_id' => 'required|numeric',
          'decimalofjobs' => 'required',
          'workregime_id' => 'required',
        ],
        [
          'professionspecialty_id.numeric' => 'Изборът на длъжност е задължителен!',
          'decimalofjobs.reuqired' => 'Броят работни места е задължителен!',
          'workregime_id.required' => 'Изборът на работен режим е задължителен',
        ]);
        //seasonal
        //trn_coststo_bg_incl

        $input = [
          'id' => $count,
          'professionspecialty_id' => $request->professionspecialty_id,
          'decimalofjobs' => $request->decimalofjobs,
          'decimalofopenjobs' => $request->decimalofopenjobs,
          //'jobavailablefrom' => $request->jobavailablefrom,
          'mainresponsibilities' => $request->mainresponsibilities,
          'extratasks' => $request->extratasks,
          'basemonthlysalaryinbgn' => $request->basemonthlysalaryinbgn,
          'add_remun_soc_benefits' => $request->add_remun_soc_benefits,
          'amountto' => $request->amountto,
          //'currency_id' => $request->currency_id,
          'workregime_id' => $request->workregime_id,
          'lastupdated' => $update,
        ];

        $cpm = jvspecification::create($input);
        //associate with a reg request
        $cpm = jvspecification::find($count);

        return redirect()->route('ra.jobs.index')->withSuccess('Вашата информация беше изпратена успешно!');

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
