<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string('reservation_id', 255)->nullable();
            $table->string('distance', 255)->nullable();
            $table->string('travel_time', 255)->nullable();
            $table->string('total_amount', 255)->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->string('reference_number', 255)->nullable();
            $table->string('paid_at', 255)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}