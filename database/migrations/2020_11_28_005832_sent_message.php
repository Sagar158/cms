<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SentMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
            Schema::create('sent_messages', function (Blueprint $table) {
                $table->increments('id');
                $table->string('reciever_mail');
                $table->string('subject');
                $table->string('message');
                $table->string('attachment')->nullable();
                $table->integer('status')->default(0);
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('sent_messages');
        }
    
}
