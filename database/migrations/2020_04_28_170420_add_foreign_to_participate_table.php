<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToParticipateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participate', function (Blueprint $table) {
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
        Schema::table('participate', function (Blueprint $table) {
            $table->dropForeign('participate_tournamentId_foreign');
            $table->dropForeign('participate_teamId_foreign');
        });
    }
}
