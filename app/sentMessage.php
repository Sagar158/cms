<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sentMessage extends Model
{
    //
    protected $table ='sent_messages';

    protected $fillable =[
        
    
        'reciever_mail','subject','message','attachment','status',
       
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
