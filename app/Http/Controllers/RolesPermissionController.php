<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use DB;

class RolesPermissionController extends Controller
{
    public function roles_list(){
        $data['roles'] = Role::all();
        return view('admin.roles_permissions.roles_list', $data);
    }

    public function role_form(){
        $data['permissions'] = Permission::all();
        return view('admin.roles_permissions.role_form', $data);
    }

    public function permission_form(){
        return view('admin.roles_permissions.permissions_form');
    }

    public function role_add(Request $request){

        $update_id = $request->id;
        $role = new Role();
		$role->slug = $request->slug;
        $role->name = $request->name;
        
        if (isset($update_id) && !empty($update_id) && $update_id != 0) {
            $role_data = Role::where('id', $update_id)->first();
            $role_data->update($request->all());
        }else{
            $role->save();
            $permissions = $request->permissions;
            if(isset($permissions) && !empty($permissions))
            {
                foreach($permissions as $value)
                {
                    
                    $selected_permission = Permission::where('slug',$value)->first();
                    $role->permissions()->attach($selected_permission);
                }
            }

         }
        return redirect('roles-list');
    }
    public function permission_add(Request $request){

        $update_id = $request->id;
        $Permission = new Permission();
		$Permission->slug = $request->slug;
        $Permission->name = $request->name;
        
        if (isset($update_id) && !empty($update_id) && $update_id != 0) {
            $Permission = Permission::where('id', $update_id)->first();
            $Permission->update($request->all());
        }else{
            $Permission->save();
        }
        return redirect('permissions-list');
    }

    public function role_edit($id){
        $per = array();
        $data['role'] = Role::find($id);
        $data['permissions'] = Permission::all();
        $ted_permissions = DB::table('roles_permissions')->where('role_id', $id)->get('permission_id');
        foreach($ted_permissions as $val){
            $per[] = $val->permission_id;
        }
        $data['selected_permissions'] = $per;
        return view('admin.roles_permissions.role_form', $data);
    }

    public function permission_edit($id){
        $data['permissions'] = Permission::find($id);
        return view('admin.roles_permissions.permissions_form', $data);
    }

    public function permissions_list(){
        $data['permissions'] = Permission::all();
        return view('admin.roles_permissions.permissions_list', $data);
    }
}
