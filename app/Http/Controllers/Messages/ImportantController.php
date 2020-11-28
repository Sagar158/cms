<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ImportantController extends Controller
{
    //
    //trash functions
    public function index(){
        $id =Auth::user()->id;
        $messages= DB::select('select * from messages where user_id=?',[$id]);
        return view('message/important',['messages'=>$messages]);
    }

    public function deletetrash(Request $request){
        $ids = $request->ids;
        DB::delete('delete sent_messages from where id =?', [$ids]);
        return redirect()->back();
    }
}