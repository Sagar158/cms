<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Message extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('messages', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('reciever_mail');
            $table->string('subject');
            $table->string('message');
            $table->string('attachment')->nullable();
            $table->integer('star')->default(0);
            $table->integer('trash')->default(0);
            $table->integer('important')->default(0);
            $table->integer('spam')->default(0);
        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('messages');
    }
}
