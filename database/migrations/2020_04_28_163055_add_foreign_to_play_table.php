<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToPlayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('play', function (Blueprint $table) {
            $table->foreign('tournamentId')->references('idTournament')->on('tournament')->onDelete('cascade');
            $table->foreign('teamId')->references('idTeam')->on('team')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('play', function (Blueprint $table) {
            $table->dropForeign('play_tournamentId_foreign');
            $table->dropForeign('play_teamId_foreign');
        });
    }
}
