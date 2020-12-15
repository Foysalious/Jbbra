<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street')->nullable();
            $table->string('division')->nullable();
            $table->string('disctrict')->nullable();
            $table->string('thana')->nullable();
            $table->string('ward')->nullable();
            $table->string('area')->nullable();
            $table->string('post')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('user_id')->nullable();
            $table->string('is_valid')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
