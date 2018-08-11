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
<<<<<<< HEAD
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
=======
            $table->string('name',191);
            $table->string('email',191)->unique();
            $table->string('password',191);
>>>>>>> 2c14e739fb7ae1190eced564acf95a69900aea8d
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
