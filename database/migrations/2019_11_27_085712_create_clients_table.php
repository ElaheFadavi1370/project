<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->default('eli');
            $table->string('last_name')->default('fadavi');
            $table->string('address')->default('123 fake street');
            $table->integer('zip_code')->default('1234');
            $table->string('city')->default('tehran');
            $table->string('state')->default('iran');
            $table->string('email')->default('www@gmail.com');
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
        Schema::dropIfExists('clients');
    }
}
