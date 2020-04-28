<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('play', function (Blueprint $table) {
            $table->bigIncrements('idPlay');
            $table->Date('date');
            $table->string('score',100);
             $table->bigInteger('tournamentId')->unsigned();
             $table->bigInteger('teamId')->unsigned();
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
        Schema::dropIfExists('play');
    }
}
