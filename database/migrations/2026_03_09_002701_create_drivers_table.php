<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->string('driver_id', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('contact_number', 255)->nullable();
            $table->string('license_number', 255)->nullable();
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
        Schema::dropIfExists('drivers');
    }
}