<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->bigIncrements('idAddress');
            $table->integer('number')->nullable();
            $table->string('location',35);
            $table->string('via',50);
            $table->integer('door');
            $table->integer('cp');
            $table->integer('floor')->nullable();
            $table->string('province',35);
            $table->string('type',15);
            $table->bigInteger('userId')->unsigned();
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
        Schema::dropIfExists('address');
    }
}
