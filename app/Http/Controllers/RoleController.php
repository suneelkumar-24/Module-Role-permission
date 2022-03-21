<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Roles;
use App\Models\RolesModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{

    public function index()
    {
        $user_id = session()->get('user_id');
        activity('display','role',$user_id);
        $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($role_id);
        // return $permissoin;
        $a = json_decode($model_and_permissoin['permissions']);
        // return $a;
        $module_id= Module::select('id')->where('name','Role')->pluck('id')->first();
        $data = A_Modules_Permission($a,$module_id);
        $roles = Roles::all();
        return view('role.index',compact('roles','data','model_and_permissoin'));
    }

    public function create()
    {
        $user_id = session()->get('user_id');
        activity('add','role',$user_id);
        $roles = Roles::all();
        $modules = Module::all();
        $RolesModule = RolesModule::all();
        $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($role_id);
        return view('role.create',compact('roles','modules','RolesModule','model_and_permissoin'));
    }

    public function store(Request $request)
    {

        // return $request->all();
        $role = new Roles();
        $role->type = $request->input('role');
        if($role->save())
        {

            $bigArray = array($request->all());
            $remove = ['_token', 'role'];
            $array = array_diff_key($bigArray[0], array_flip($remove));
            $keys = array_filter(array_keys($array), 'is_int');

            $RolesModuleObject = new RolesModule();
            $RolesModuleObject->role_id = $role->id;
            $RolesModuleObject->module_id = implode(",",$keys);;
            $RolesModuleObject->module_permission = json_encode($array);
                $RolesModuleObject->save();


            return redirect('/role/index');
        }
        else
        {
            return Redirect::back()->with('message','not saved');
        }
    }

    public function edit($id)
    {

        $role= Roles::find($id);
        $modules = Module::all();
        $RolesModule = RolesModule::all();
        // return 'hi';
        // $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($id);
        $array = json_decode($model_and_permissoin['permissions']);
        // return $array;
        // $data = A_Modules_Permission($a,$module_id);
        return view('role.edit',compact('role','modules','RolesModule','model_and_permissoin','array'));
        // return view('role.edit',compact('role'));
    }

    public function update(Request $request)
    {
        $user_id = session()->get('user_id');
        activity('update','role',$user_id);
        $role= Roles::find($request->input('id'));
        // return $role;
        $role->type =$request->input('role');
        if($role->update())
        {
            $bigArray = array($request->all());
            $RolesModuleObject = RolesModule::where('role_id',$role->id)->first();
            // return $RolesModuleObject;
            $remove = ['_token', 'role','_method','id'];
            $array = array_diff_key($bigArray[0], array_flip($remove));
            $keys = array_filter(array_keys($array), 'is_int');

            $RolesModuleObject->module_id = implode(",",$keys);;
            $RolesModuleObject->module_permission = json_encode($array);
                $RolesModuleObject->update();

            return redirect('/role/index');
        }
        else
        {
            return Redirect::back()->with('message','not saved');
        }
    }


    public function delete($id)
    {
        $user_id = session()->get('user_id');
        activity('delete','role',$user_id);
        $role = Roles::find($id);
        $role->delete();
        $roles_moduel = RolesModule::where('role_id',$id);
        $roles_moduel->delete();
        return redirect('/role/index');

    }








}
