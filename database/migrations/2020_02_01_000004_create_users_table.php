<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('email')->nullable()->unique();

            $table->datetime('email_verified_at')->nullable();

            $table->string('password')->nullable();

            $table->string('remember_token')->nullable();

            $table->string('first_name')->nullable();

            $table->string('last_name')->nullable();

            $table->string('phone_no')->nullable();

            $table->longText('address_1')->nullable();

            $table->string('city')->nullable();

            $table->string('state')->nullable();

            $table->string('zipcode')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
