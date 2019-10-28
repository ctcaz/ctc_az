<?php
/*
		File:	App\Http\Controllers\Nom\LanguagesController.php
		 Ver:	1.00.003
 Purpose:	Language Controller
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Http\Controllers\Nom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\General\Snumber;
use App\Models\Nom\N_language;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $n_languages = N_language::paginate(10); //active()->
         
				 return view('admin.nom.languages.index', compact('n_languages'));
				  
					/*
					$id = Snumber::getLastNumber('n_languages');
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
        return view('admin.nom.languages.create');
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
				$id = Snumber::getLastNumber('n_languages');

        //Create a new Language
				$update = new N_language();
        $update = ['id'=>$id, 'name' => $request->name, 'name_en' => $request->name_en, 'is_active'=>$request->is_active];
        N_language::create($update);

        //registrationrequest::create($this->validatedData());

        return redirect()->route('nom.languages.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nom\N_language  $n_language
     * @return \Illuminate\Http\Response
     */
    public function show(N_language $n_language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nom\N_language  $n_language
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n_language = N_language::findOrFail($id);
        //dd($n_language);
        return view('admin.nom.languages.edit', compact('n_language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nom\N_language  $n_language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'name' => 'required',
            'name_en' => 'required',
            'is_active' => 'required',
          ]);
          $update = ['name' => $request->name, 'name_en' => $request->name_en, 'is_active'=>$request->is_active];
          N_language::where('id',$id)->update($update);

          return redirect()->route('nom.languages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nom\N_language  $n_language
     * @return \Illuminate\Http\Response
     */
    public function destroy(N_language $n_language)
    {
        //
    }
		
		
    public function validatedData()
    {
      return request()->validate([
        'id' => 'required',
        'name_en' => 'reqiured',
        'name'=> 'required',
        'is_active'=>'required',
      ]);
    }

}
