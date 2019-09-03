<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStacjeBazowesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stacje_bazowes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nazwa');
            $table->boolean('status');
            $table->point('wspolrzedne');
            $table->integer('range');
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
        Schema::dropIfExists('stacje_bazowes');
    }
}
