<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use App\sentMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class SentMessageController extends Controller
{
    public function index(){

        $id =Auth::user()->id;
        $messages= DB::select('select * from sent_messages where id=?',[$id]);
        return view('message/sentMessage',['messages'=>$messages]);
    }

     public function DeleteSent(Request $request){
        $ids = $request->ids;
        DB::delete('delete from sent_messages where id =?', [$ids]);
        return redirect()->back();

    }
    
}
