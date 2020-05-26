<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearContainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contain', function (Blueprint $table) {
            $table->bigInteger('packId')->unsigned();
            $table->bigInteger('serviceId')->unsigned();
            $table->primary(array('packId', 'serviceId')); 
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
        Schema::dropIfExists('contain');
    }
}
