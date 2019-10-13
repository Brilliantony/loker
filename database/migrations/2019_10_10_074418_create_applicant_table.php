<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_applicant', function (Blueprint $table) {
            $table->increments('applicant_id');
            $table->string('name');
            $table->string('photo');
            $table->string('nick_name');
            $table->string('level');
            $table->integer('majors_id');
            $table->string('gender');
            $table->string('address');
            $table->string('code_wilayah');
            $table->string('email')->unique();
            $table->string('telp');
            $table->string('birth_date');
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
        Schema::dropIfExists('t_applicant');
    }
}
