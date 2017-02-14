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
            $table->increments('id', true);
            //$table->uuid('user_uuid');
            $table->string('name');
            $table->string('title');
            $table->string('comment');
            //$table->binary('post_image');
            $table->rememberToken();
            $table->timestamps();

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
        });


//        Schema::table('posts', function($table) {
//            $table->foreign('user_uuid')
//                //->references('uuid')->on('users')
//                ->references('id')->on('users')
//                ->onDelete('cascade');
//        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void        DB::statement('ALTER TABLE post ADD user_uuid BINARY(16) NOT NULL AFTER id;');

     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
