<?php

namespace App\Http\Controllers;

use APP\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function usersList()
    {
        $data['users'] = User::all();
        return view('pages.page-users-list', $data);
    }
    public function usersView()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Users View"]];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.page-users-view', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    }
    public function usersEdit()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "User"], ['name' => "Users Edit"]];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.page-users-edit', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    }
    public function store(Request $request)
    {
        $update_id = $request->id;

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if (isset($update_id) && !empty($update_id) && $update_id != 0) {
            $user_data = User::where('id', $update_id)->first();
            $user_data->update($request->all());
            $this->usersList();
        }else{
            $user->save();
            $last_id = $user->id;
            if (isset($last_id) && !empty($last_id)) {
                $this->usersList();
            } else {
                return back()->with('error', 'Something Went wrong!');
            }

        }
    }

}
