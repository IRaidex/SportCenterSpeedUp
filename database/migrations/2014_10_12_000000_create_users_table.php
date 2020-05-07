<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUser');
            $table->string('password',100);
            $table->string('name',100);
            $table->string('email',100);
            $table->string('firts_surname',100);
            $table->string('second_surname',100);
            $table->string('sex',50);
            $table->string('picture',100);
            $table->string('role',100);
            $table->Date('date_birth');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
