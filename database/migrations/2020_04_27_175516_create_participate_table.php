<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participate', function (Blueprint $table) {
            $table->bigInteger('tournamentId')->unsigned();
            $table->bigInteger('teamId')->unsigned();
            $table->primary(array('tournamentId', 'teamId'));
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
        Schema::dropIfExists('participate');
    }
}
