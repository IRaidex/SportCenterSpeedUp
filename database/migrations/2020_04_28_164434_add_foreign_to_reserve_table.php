<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToReserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reserve', function (Blueprint $table) {
            $table->foreign('userId')->references('idUser')->on('users')->onDelete('cascade');
            $table->foreign('trackId')->references('idTrack')->on('track')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reserve', function (Blueprint $table) {
            $table->dropForeign('reserve_userId_foreign');
            $table->dropForeign('reserve_trackId_foreign');     
        });
    }
}
