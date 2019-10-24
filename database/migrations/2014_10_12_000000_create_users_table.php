<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('mode');
            $table->integer('mode_id');
            $table->string('privilege');
            $table->string('remember_token', 100)->nullable();
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
        //Schema::dropIfExists('t_user');
        Schema::table('t_user', function (Blueprint $table) {
            $table->dropColumn('remember_token');
        });
    }
}
