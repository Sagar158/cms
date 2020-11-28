<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\sentMessage;
use Illuminate\Support\Facades\Mail;
use Image;


class InboxController extends Controller
{
   
    public function index(){

        $id =Auth::user()->email;
        $star=0;
        $messages= DB::select('select * from messages where reciever_mail=? and trash=?',[$id,$star]);
        return view('message/inbox',['messages'=>$messages]);
    }

    public function deleteAll(Request $request){
        $ids = $request->ids;
        $status = 1;
         DB::update('update messages set trash=? where id =?', [$status,$ids]);
        
        return redirect()->back();
    }
 
    public function insert(Request $request){

        
    
        $user1=Auth::user()->id;
       
       

        
          $insert = new sentMessage;
          $file=$request->file('attachment');
         
          $filename =$file->getClientOriginalName();
          $file->storeAs('public/uploads/files',$filename);
          $status =1;
          $insert->reciever_mail= $request->input('reciever_mail');
          $insert->subject = $request->input('subject');
          $insert->message= $request->input('message');
          $insert->attachment=$filename ;
          $insert->status=$status ;
          $insert->save();      

          $inbox = new Message;
          $inbox->reciever_mail= $request->input('reciever_mail');
          $inbox->subject = $request->input('subject');
          $inbox->message= $request->input('message');
          $inbox->attachment=$filename ;
          $inbox->save();      
          return redirect()->back();
        
      }


}
