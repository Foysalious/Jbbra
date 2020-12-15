<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('post')->nullable();
            $table->string('from')->nullable();
            $table->string('till')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('cPerson')->nullable();
            $table->string('email')->nullable();
            $table->string('responsibilty')->nullable();
            $table->string('achivements')->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
