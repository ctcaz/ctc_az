<?php

namespace App\Http\Controllers\CPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Snumber;
use App\Models\Nom\N_professionclass;
use App\Models\Nom\N_profession;
use App\Models\Nom\N_currency;
use App\Models\Nom\N_workregime;
use App\Models\Nom\N_educationlevel;
use App\Models\Nom\N_speciality;
use App\Models\Nom\n_work_experience;
use App\Models\JV\jvspecification;

class CPMController extends Controller
{
    public function getProf($id)
    {
      $id_start = $id *10;
      $id_end = $id_start + 9;
      $specs = N_profession::where('prof_group_id', '>=', $id_start)
        ->where('prof_group_id', '<=', $id_end)
        ->where('is_active', 'Y')
        ->orderBy('name', 'asc')
        ->get()
        ->pluck('name', 'codeprof');

      return json_encode($specs);
    }

    public function index()
    {
        $lvl1 = N_professionclass::active()->lvl1()->get();
        $lvl2 = N_professionclass::active()->lvl2()->get();
        $lvl3 = N_professionclass::active()->lvl3()->get();

        //$lvl4 = N_profession::active()->get();

        $currencies = N_currency::active()->get();
        $regimes = N_workregime::active()->get();

        $edu_lvl = N_educationlevel::active()->get();

        $specs = N_speciality::active()->get();
        $experiances = n_work_experience::all();
        //dd($lvl1);

        return view('CPM.create', compact('lvl1', 'lvl2', 'lvl3', 'currencies', 'regimes', 'edu_lvl', 'specs', 'experiances'));
    }

    public function create()
    {
        $lvl1 = N_professionclass::active()->lvl1()->get();
        $lvl2 = N_professionclass::active()->lvl2()->get();
        $lvl3 = N_professionclass::active()->lvl3()->get();

        //$lvl4 = N_profession::active()->get();

        $currencies = N_currency::active()->get();
        $regimes = N_workregime::active()->get();

        $edu_lvl = N_educationlevel::active()->get();

        $specs = N_speciality::active()->get();
        $experiances = n_work_experience::all();
        //dd($lvl1);

        return view('CPM.create', compact('lvl1', 'lvl2', 'lvl3', 'currencies', 'regimes', 'edu_lvl', 'specs', 'experiances'));
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

        return redirect()->back()->withSuccess('Вашата информация беше изпратена успешно!');

    }

}
