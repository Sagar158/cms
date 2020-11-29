<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function usersList()
    {
        $data['users'] = User::all();
        return view('admin.users.user_list', $data);
    }
    public function user_form()
    {
        $data['roles'] = Role::all();
        return view('admin.users.user_form', $data);
    }
    public function user_add(Request $request)
    { 
        $role = Role::where('slug', $request->role)->first();

        $user = new User();
		$user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->save();
        if(isset($role) && !empty($role))
        {
            $user->roles()->attach($role);
        }
        $data['users'] = User::all();
        return view('admin.users.user_list', $data);
    }
    public function usersEdit($id)
    {
        $data['user_data'] = User::find($id);
        return view('admin.users.user_form', $data);
    }

}
