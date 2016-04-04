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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('is_admin')->default(false);
            $table->string('userable_type')->nullable();
            $table->string('userable_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('employees', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('landline_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(false);
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
        Schema::drop('employees');
        Schema::drop('users');
    }
}
