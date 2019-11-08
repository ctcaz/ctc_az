<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\General\Snumber;


class UsersController extends Controller
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
        if(Gate::denies('edit-users')){

          return redirect('logout');
        };

        $users = User::paginate(5); //passing the users data to the view
        return view('admin.users.index', compact('users'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        if(Gate::denies('edit-users')){
          return redirect(route('admin.users.index'));
        };

        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

      Log::info($request);
      Log::info($user->id);
        $user->roles()->sync($request->roles);

        $user->name = request('name');
        $user->email = request('email');
        $user->active = request('active');
        $user->save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('admin.users.create');
        $roles = Role::all();

				return view('admin.users.create', compact('roles'));
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
        //[id, name, email,email_verified_at, password, remember_token, person_id, active];

        //$roles = Role::all();
        Log::info($request);

				$id = Snumber::getLastNumber('users');

        //$hashed = Hash::make($request->password);
        //$request = ['password'];
        //Create a new user
				$user = new User();
        //$user = ['id'=>$id, 'name' => $request->name, 'email' => $request->email, 'password' => $request->password, 'active' => $request->is_active, 'person_id'=>'0'];
        $user = ['id'=>$id, 'name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password), 'active' => $request->is_active, 'person_id'=>'0'];
        User::create($user);
        $user = User::where('id',$id)->first();
        //$user = User::findOrFail($id);
        $user->roles()->sync($request->roles);
        //$user->roles()->sync([1,2,3]);
        //$user->roles()->attach([1,2,3]);

        //registrationrequest::create($this->validatedData());

        /*return redirect()->route('admin.users.index');*/
				return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
          return redirect(route('admin.users.index'));
        };

        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }


}
