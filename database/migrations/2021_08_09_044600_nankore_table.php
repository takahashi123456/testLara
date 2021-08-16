<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NankoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nankores', function (Blueprint $table){
            $table->increments('id');
            $table->Biginteger('user_id')->unsigned();
            $table->string('title' , 100);
            $table->string('author' , 40);
            $table->string('ISBN' , 40);
            $table->timestamps();

            //外部キー設定する
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nankore');
    }
}
