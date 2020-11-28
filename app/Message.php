<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    // protected $table='Messages';

    protected $fillable =[

      'subject', 'message','reciever_mail','attachment','important','trash','star'
    ];

    public function user(){
      return $this->belongsTo('App\User');
  }
}

