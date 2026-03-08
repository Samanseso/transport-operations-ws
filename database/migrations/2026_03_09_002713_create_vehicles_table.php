<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->string('vehicle_id', 255)->nullable();
            $table->string('driver_id', 255)->nullable();
            $table->string('plate_number', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('capacity', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('created_at', 255)->nullable();
            $table->string('updated_at', 255)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}