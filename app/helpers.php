<?php
use App\Models;
use App\Models\Activity_logs;
use App\Models\Module;
use App\Models\Roles;
use App\Models\RolesModule;

function ModulesAndPermission($role_id)
{

    $result = RolesModule::select('module_id','module_permission')->where('role_id',$role_id)->get();
// return $result;
    // return $result[0]['module_permission'];
    $thePostIdArray = explode(',', $result[0]->module_id);
    $modules = Module::whereIn('id', $thePostIdArray)->get();
// return $modules;
    $role = Roles::find($role_id);
    $ModulesAndPermission = [
        'modules' => $modules,
        'roles'   => $role,
        'permissions' => $result[0]['module_permission'],
        'role_id' =>$role_id,
    ];

    return $ModulesAndPermission;
}


function activity($route,$table,$user_id)
{
    $object = new Activity_logs();
    $object->activity = $route;

    $object->table = $table;
    $object->user_id = $user_id;
    $object->save();
    return;
}

function A_Modules_Permission($array , $module_id)
{
    // $data = [];
    foreach ( $array as $key => $value )
            {
                if($key==$module_id)
                {
                    return $value;
                }
            }
        }

        // return $data;
?>