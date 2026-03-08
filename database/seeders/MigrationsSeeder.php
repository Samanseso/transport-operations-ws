<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MigrationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the migrations table with initial data.
     */
    public function run()
    {
        DB::table('migrations')->insert([
           
        ]);
    }
}