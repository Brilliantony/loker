<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_company', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name');
            $table->string('company_logo');
            $table->string('company_telp');
            $table->string('company_email')->unique();
            $table->string('code_wilayah');
            $table->string('attch_siup');
            $table->string('attch_tdp');
            $table->string('attch_npwp');
            $table->string('attch_photo');
            $table->string('company_address');
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
        Schema::dropIfExists('t_company');
    }
}
