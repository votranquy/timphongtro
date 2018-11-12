<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_type_id');
            $table->unsignedInteger('room_type_id'); 
            $table->unsignedInteger('user_id');
            $table->string('title',200);
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('minPrice')->nullable();
            $table->unsignedInteger('maxPrice')->nullable();
            $table->string('address',255)->nullable();
            $table->string('phone',255)->nullable();
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
        Schema::dropIfExists('posts');
    }
}
