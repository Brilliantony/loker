<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_school', function (Blueprint $table) {
            $table->increments('school_id');
            $table->string('school_name');
            $table->string('school_logo');
            $table->string('school_telp');
            $table->string('school_email');
            $table->string('school_address');
            $table->string('level');
            $table->string('code_wilayah');
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
        Schema::dropIfExists('t_school');
    }
}
