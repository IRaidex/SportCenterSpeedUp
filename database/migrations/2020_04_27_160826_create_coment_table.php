<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coment', function (Blueprint $table) {
            $table->bigIncrements('idComent');
            $table->string('content',150);
            $table->timestamp('date');
            $table->bigInteger('userId')->unsigned();
            $table->bigInteger('articleId')->unsigned();
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
        Schema::dropIfExists('coment');
    }
}
