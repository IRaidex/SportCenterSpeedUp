<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contract', function (Blueprint $table) {
            $table->foreign('userId')->references('idUser')->on('users')->onDelete('cascade');
            $table->foreign('packId')->references('idPack')->on('pack')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contract', function (Blueprint $table) {
            $table->dropForeign('contract_userId_foreign');
            $table->dropForeign('contract_packId_foreign');     
        });
    }
}
