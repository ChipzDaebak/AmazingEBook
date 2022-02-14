<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->nullable(false);
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedBigInteger('gender_id')->nullable(false);
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->string('first_name', 25)->nullable(false);
            $table->string('middle_name', 25);
            $table->string('last_name', 25)->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('display_picture_link')->nullable(false);
            $table->integer('delete_flag');
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
        Schema::dropIfExists('accounts');
    }
};
