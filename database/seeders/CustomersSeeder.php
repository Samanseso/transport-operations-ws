<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the customers table with initial data.
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'customer_id' => 1,
                'customer_name' => 'Evander Wines',
                'email' => 0,
                'contact_number' => '09123456789',
                'created_at' => '2025-09-24 13:18:32'
            ],
            [
                'customer_id' => 2,
                'customer_name' => 'Gab',
                'email' => 0,
                'contact_number' => '09123456789',
                'created_at' => '2025-10-16 18:12:14'
            ],
            [
                'customer_id' => 3,
                'customer_name' => 'New Customer',
                'email' => 0,
                'contact_number' => '1235',
                'created_at' => '2025-10-07 14:31:55'
            ],
            [
                'customer_id' => 4,
                'customer_name' => 'Sample',
                'email' => 0,
                'contact_number' => '09298210367',
                'created_at' => '2025-09-24 13:20:32'
            ]
        ]);
    }
}