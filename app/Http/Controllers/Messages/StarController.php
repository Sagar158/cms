<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StarController extends Controller
{
    //trash functions
    public function index(){
        $id =Auth::user()->email;
        $star= 1;
        
             $messages= DB::select('select * from messages where star=? and reciever_mail=?',[$id,$star]);
            return view('message/Star',['messages'=>$messages]);
        
       
      
    }

    public function deleteStar(Request $request){
        $ids = $request->ids;
        $star=1;
        DB::delete('delete from messages where id =? and star=?', [$ids,$star]);
        return redirect()->back();
    }

    public function UpdateStar(Request $request){
        $id =Auth::user()->email;
        $star=1;

        DB::update('update messages set star=? where reciever_mail=?',[$star,$id]);
        return redirect()->back();
    }

}
