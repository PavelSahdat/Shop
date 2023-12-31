<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unique(array('user_id','role_id'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voi
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
