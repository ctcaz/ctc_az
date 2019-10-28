<?php

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use App\Models\Nom\N_country;
use App\Models\General\Snumber;
use Illuminate\Http\Request;
use Gate;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $n_countries = N_country::paginate(10); //active()->

         return view('admin.nom.countries.index', compact('n_countries'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nom.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Find the last number for this table in snumbers
				/*
        $lastID = Snumber::where('table_name', 'n_countries')->first();
        $count  = 1;
        if ($lastID <> null) {
            $count  = $lastID->last_number;
            $count ++;
        }
        
        //update the last number
        $input2 = ['last_number' => $count];
        $lastID = Snumber::where('id',$lastID->id)->update($input2);
				*/
				$count = Snumber::getLastNumber('n_countries');

        //Create a new registrationrequest
				$update = new N_country();
        $update = ['id'=>$count, 'name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
        N_country::create($update);
        //$n_country = N_country::create($request);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('nom.countries.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_country  $n_country
     * @return \Illuminate\Http\Response
     */
    public function show(N_country $n_country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_country  $n_country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_country = N_country::findOrFail($id);
        //dd($n_country);
        return view('admin.nom.countries.edit', compact('n_country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_country  $n_country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            'code' => 'required',
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
          N_country::where('id',$id)->update($update);

          return redirect()->route('nom.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_country  $n_country
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_country $n_country)
    {
        //
    }

    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'code' => 'reqiured',
        'name'=> 'required',
        'is_active'=>'required',
      ]);
    }
}
