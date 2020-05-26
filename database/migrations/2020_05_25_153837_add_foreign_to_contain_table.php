<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToContainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contain', function (Blueprint $table) {
            $table->foreign('packId')->references('idPack')->on('pack')->onDelete('cascade');
            $table->foreign('serviceId')->references('idService')->on('service')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contain', function (Blueprint $table) {
            $table->dropForeign('contain_packId_foreign');
            $table->dropForeign('contain_serviceId_foreign');
        });
    }
}
