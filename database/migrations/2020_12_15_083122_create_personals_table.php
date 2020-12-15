<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('nid')->nullable();
            $table->string('country')->nullable();
            $table->string('b_date')->nullable();
            $table->string('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital')->nullable();
            $table->string('religion')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('son')->nullable();
            $table->string('daughter')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('passNo')->nullable();
            $table->string('d_job1')->nullable();
            $table->string('d_job2')->nullable();
            $table->string('d_job3')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('personals');
    }
}
