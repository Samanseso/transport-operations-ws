<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatches', function (Blueprint $table) {
            $table->string('reservation_id', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('vehicle_id', 255)->nullable();
            $table->string('schedule', 255)->nullable();
            $table->string('assigned_at', 255)->nullable();
            $table->string('delivered_at', 255)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispatches');
    }
};