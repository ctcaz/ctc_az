<?php
/*
		File:	App\Http\Controllers\Nom\CurrencyController.php
		 Ver:	1.00.003
 Purpose:	Currency Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_currency;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_currencies = N_currency::paginate(10); //active()->
         
				 return view('admin.nom.currency.index', compact('n_currencies'));
				  
					/*
					$id = Snumber::getLastNumber('n_currencies');
				  print_r ($id);
					*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.nom.currency.create');
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
				$id = Snumber::getLastNumber('n_currencies');

        //Create a new currency
				$update = new N_currency();
        $update = ['id'=>$id, 'name' => $request->name, 'code' => $request->code, 'is_active'=>$request->is_active];
        N_currency::create($update);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('nom.currency.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_currency  $n_currency
     * @return \Illuminate\Http\Response
     */
    public function show(N_currency $n_currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_currency  $n_currency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_currency = N_currency::findOrFail($id);
        //dd($n_currency);
        return view('admin.nom.currency.edit', compact('n_currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_currency  $n_currency
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
          N_currency::where('id',$id)->update($update);

          return redirect()->route('nom.currency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_currency  $n_currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_currency $n_currency)
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
