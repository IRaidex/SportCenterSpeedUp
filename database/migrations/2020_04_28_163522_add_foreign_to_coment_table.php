<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToComentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coment', function (Blueprint $table) {
            $table->foreign('userId')->references('idUser')->on('users')->onDelete('cascade');
            $table->foreign('articleId')->references('idArticle')->on('article')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coment', function (Blueprint $table) {
            $table->dropForeign('coment_userId_foreign');
            $table->dropForeign('coment_articleId_foreign');        
        });
    }
}
