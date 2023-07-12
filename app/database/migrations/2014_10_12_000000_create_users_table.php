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
            $table->bigIncrements('id');
            $table->string('name', '10')->unique();
            $table->string('email', '255')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', '100');
            $table->binary('image')->nullable();
            $table->string('profile', '300')->nullable();
            $table->boolean('rol')->default(1);
            $table->boolean('del_flg')->default(0);
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
