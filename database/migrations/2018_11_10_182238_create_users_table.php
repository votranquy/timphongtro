<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('username',255);
            $table->string('password',255);
            $table->string('name',100)->nullable();
            $table->string('address',255)->nullable();
            $table->string('phone',10)->nullable();
            $table->string('image',255)->nullable();
            $table->string('email',255)->nullable();
            $table->timestamps();
            $table->string('remember_token',100)->nullable();
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
