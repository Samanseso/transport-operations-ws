<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the api table with initial data.
     */
    public function run()
    {
        DB::table('api')->insert([
            [
                'api_id' => 'API-1001',
                'property_name' => 'Map API Key',
                'property_value' => '0ff16599-5a92-4b5a-8bed-d051d277d043'
            ],
            [
                'api_id' => 'API-1002',
                'property_name' => 'Map Template Path',
                'property_value' => 'file:///C:/Users/U%20S%20E%20R%20-%20P%20C/source/repos/Transport_Operations_Software/MapTemplate.html'
            ]
        ]);
    }
}