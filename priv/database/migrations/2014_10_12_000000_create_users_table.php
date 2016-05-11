<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nama');
            $table->string('username');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('foto');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('pos');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyinteger('admin');
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
        Schema::drop('users');
    }
}
