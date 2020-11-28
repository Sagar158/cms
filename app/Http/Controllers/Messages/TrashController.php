<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    //trash functions
    public function trash(){
        $email =Auth::user()->email;
        $trash =1;
        $messages= DB::select('select * from messages where reciever_mail=? and trash=?',[$email,$trash]);
        return view('message/trash',['messages'=>$messages]);
    }

    public function deleteTrash(Request $request){
        $ids = $request->ids;
        $trash= 1;
        DB::delete('delete from messages where id =? and trash=?', [$ids,$trash]);
        return redirect()->back();
    }

   
    
}
