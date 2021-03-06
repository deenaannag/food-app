<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username');
            $table->string('email');
            $table->string('mobile');
            $table->string('address');
            $table->integer('login_id');
            $table->string('password');
            $table->string('createpassword');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signups');
    }
}
