<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ModuleController extends Controller
{
    public function index()
    {
        $user_id = session()->get('user_id');
        activity('display','module',$user_id);
        $role_id = session()->get('role_id');
        $permissoin = ModulesAndPermission($role_id);
        $a = json_decode($permissoin['permissions']);
        // return $a;
        $module_id= Module::select('id')->where('name','Module')->pluck('id')->first();
        $data = A_Modules_Permission($a,$module_id);
        $modules = Module::all();
        $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($role_id);
        return view('module.index',compact('modules','data','model_and_permissoin'));
    }

    public function create()
    {
        $user_id = session()->get('user_id');
        activity('add','module',$user_id);
        $role_id = session()->get('role_id');
        $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($role_id);
        return view('module.create',compact('model_and_permissoin'));
    }

    public function store(Request $request)
    {

        $module = new Module();
        $module->name = $request->input('name');
        $module->route = $request->input('route');
        $module->actions = $request->input('actions');

        if($module->save())
        {
            return redirect('/module/index');
        }
        else
        {
            return Redirect::back()->with('message','not saved');
        }
    }

    public function edit($id)
    {
        $module= Module::find($id);
        $role_id = session()->get('role_id');
        $model_and_permissoin = ModulesAndPermission($role_id);
        return view('module.edit',compact('module','model_and_permissoin'));
    }

    public function update(Request $request)
    {
        $user_id = session()->get('user_id');
        activity('update','module',$user_id);
        $module= Module::find($request->input('id'));
        $module->name = $request->input('name');
        $module->route = $request->input('route');
        $module->actions = $request->input('actions');
        if($module->update())
        {
            return redirect('/module/index');
        }
        else
        {
            return Redirect::back()->with('message','not saved');
        }
    }


    public function delete($id)
    {
        $user_id = session()->get('user_id');
        activity('delete','module',$user_id);
        $module = Module::find($id);
        $module->delete();
        return redirect('/module/index');

    }







}
