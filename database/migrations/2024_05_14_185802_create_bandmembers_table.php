<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandMembersTable extends Migration
{
    public function up()
    {
        Schema::create('band_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('band_id');
            $table->string('name', 20);
            $table->string('instrument', 20);
            $table->integer('age');
            $table->string('instrument_level', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('band_members');
    }
}
