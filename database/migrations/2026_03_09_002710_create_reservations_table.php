<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('reservation_id', 255)->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('pickup_address', 255)->nullable();
            $table->string('pickup_latlng', 255)->nullable();
            $table->string('dropoff_address', 255)->nullable();
            $table->string('dropoff_latlng', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->string('time', 255)->nullable();
            $table->string('service_type', 255)->nullable();
            $table->string('cargo_details', 255)->nullable();
            $table->string('special_instructions', 255)->nullable();
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
        Schema::dropIfExists('reservations');
    }
}