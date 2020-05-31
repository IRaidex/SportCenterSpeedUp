<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('idArticle');    
            $table->text('content',5000);
            $table->timestamp('date');
            $table->string('title',150);
            $table->string('picture',100);
            $table->string('tag1',15);
            $table->string('tag2',15);
            $table->string('tag3',15);
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
        Schema::dropIfExists('article');
    }
}
