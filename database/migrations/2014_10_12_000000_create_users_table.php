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
        Schema::dropIfExists('files');
        Schema::dropIfExists('news');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('users');


        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->uuid('uuid');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
//            $table->date('date');
//            $table->enum('sex', array('Male', 'Female'));
//            $table->enum('rol', array('admin', 'subadmin', 'user'));
//            $table->enum('status', array('Master', 'Federated', 'Schooler'));
//            $table->enum('category', array('Benjamín', 'Alevín', 'Infantil'));
            $table->rememberToken();
            //$table->primary('uuid');

            $table->timestamps();

        });

//        DB::statement('ALTER TABLE users ADD uuid BINARY(16) NOT NULL AFTER id;');
//        DB::statement('CREATE UNIQUE INDEX users_uuid_unique ON users (uuid);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('users');

    }
}
