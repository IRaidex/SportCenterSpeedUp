<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve', function (Blueprint $table) {
            $table->bigInteger('idUser');
            $table->bigInteger('idTrack');
            $table->Date('date');
            $table->bigInteger('userId')->unsigned();
            $table->bigInteger('trackId')->unsigned();
            $table->timestamps();
            $table->primary(array('idUser', 'idTrack')); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve');
    }
}
