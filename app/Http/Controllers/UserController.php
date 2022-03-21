<?php

namespace App\Http\Controllers;

use App\Models\Activity_logs;
use App\Models\Module;
use App\Models\Roles;
use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $user_id = session()->get('user_id');
        activity('display','user',$user_id);
        $role_id = session()->get('role_id');
        // return $user;
        $permissoin = ModulesAndPermission($role_id);
        // return $permissoin;
        $a = json_decode($permissoin['permissions']);
        // return $a;
        $users = User::with('role')->get();
        $module_id= Module::select('id')->where('name','User')->pluck('id')->first();
        $data = A_Modules_Permission($a,$module_id);
            $role_id = session()->get('role_id');
            $model_and_permissoin = ModulesAndPermission($role_id);
        return view('user.index',compact('users','data','model_and_permissoin'));
    }

    public function create()
    {
        // $user_id = session()->get('user_id');
        // activity('add','user',$user_id);
        $roles = Roles::all();
        $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($role_id);
        return view('user.create',compact('roles','model_and_permissoin'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $user = new User();
        $user->role_id =$request->input('role');
        $user->username =$request->input('username');
        $user->first_name =$request->input('firstname');
        $user->last_name =$request->input('lastname');
        $user->email =$request->input('email');
        $user->address =$request->input('address');
        $user->password =$request->input('password');
        if($user->save())
        {
            return redirect('/user/index');
        }
        else
        {
            return Redirect::back()->with('message','not saved');
        }
    }

    public function edit($id)
    {
        $user= User::find($id);
        // return $user;
        $roles = Roles::all();
        $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($role_id);
        return view('user.edit',compact('user','roles','model_and_permissoin'));
    }

    public function update(Request $request)
    {
        $user_id = session()->get('user_id');
        activity('update','user',$user_id);
        $user= User::find($request->input('id'));
        $user->role_id =$request->input('role');
        $user->username =$request->input('username');
        $user->first_name =$request->input('firstname');
        $user->last_name =$request->input('lastname');
        $user->email =$request->input('email');
        $user->address =$request->input('address');
        $user->password =$request->input('password');
        if($user->update())
        {
            return redirect('/user/index');
        }
        else
        {
            return Redirect::back()->with('message','not saved');
        }
    }


    public function delete($id)
    {
        $user_id = session()->get('user_id');
        activity('delete','user',$user_id);
        $user = User::find($id);
        $user->delete();
        return redirect('/user/index');

    }
    public function sign_in(Request $request)
    {
        // return 'hi';

        $username=$request->input('username');
        $password=$request->input('password');
        $user = User::where('username',$username)->where('password',$password)->first();
        // return $user;
        if($user!=null)
        {
            session()->forget('role_id');
            session()->put('role_id', $user->role_id);
            session()->put('user_id', $user->id);
            session()->put('username',$user->username);
            // $user_id = session()->get('user_id');
            activity('login','user',$user->id);
            $model_and_permissoin = ModulesAndPermission($user->role_id);
            // return $model_and_permissoin;
            return view('layout',compact('model_and_permissoin'));
        }
        else
        {
            return Redirect::back()->with('message','Invalid Credentials');
        }
    }
}
