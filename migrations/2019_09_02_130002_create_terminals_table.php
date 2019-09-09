<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klient_id')->unsigned();
            
            $table->String('nazwa');
            $table->String('adres');
            $table->integer('operator_id')->unsigned();
            
            $table->point('wspolrzedne');
            $table->boolean('status');
            $table->String('imsi_id_karty');
            $table->String('ip');
            $table->timestamps();
        
            $table->foreign('klient_id')->references('id')->on('klients');
            $table->foreign('operator_id')->references('id')->on('operators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terminals');
    }
}
