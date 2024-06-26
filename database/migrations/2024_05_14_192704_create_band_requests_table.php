<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('band_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('band_id')->onDelete('cascade');
            $table->string('title', 50);
            $table->string('new_member_instrument', 120);
            $table->char('instrument_level', 14)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('band_requests');
    }
}
