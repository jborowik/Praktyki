<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaSygnalowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_sygnalows', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('terminal_id')->unsigned();
            $table->integer('stacja_bazowa_id')->unsigned();

            $table->integer('TX Power')->nullable($value = true);
            $table->integer('RSRP0')->nullable($value = true);
            $table->integer('RSRP1')->nullable($value = true);
            $table->integer('SINR0')->nullable($value = true);
            $table->integer('SINR1')->nullable($value = true);
            $table->integer('RSRQ')->nullable($value = true);
            $table->integer('CINR0')->nullable($value = true);
            $table->integer('CINR1')->nullable($value = true);
            $table->integer('RSSI')->nullable($value = true);

            $table->foreign('terminal_id')->references('id')->on('terminals');
            $table->foreign('stacja_bazowa_id')->references('id')->on('stacje_bazowes');

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
        Schema::dropIfExists('historia_sygnalows');
    }
}
