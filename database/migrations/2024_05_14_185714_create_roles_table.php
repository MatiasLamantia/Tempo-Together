<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            //user_id es autoincrementado
            $table->unsignedBigInteger('user_id');            
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->char('role', 16);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
