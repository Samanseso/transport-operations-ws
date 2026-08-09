<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the pricing table with initial data.
     */
    public function run()
    {
        $rows = [
            [
                'pricing_id' => 'PRC-1001',
                'service_type' => 'Leisure / Personal Transport',
                'base_rate' => 1000.00,
                'distance_rate' => 35.00,
                'travel_time_rate' => 500.00
            ],
            [
                'pricing_id' => 'PRC-1002',
                'service_type' => 'Corporate / Institutional Transport',
                'base_rate' => 2000.00,
                'distance_rate' => 40.00,
                'travel_time_rate' => 600.00
            ],
            [
                'pricing_id' => 'PRC-1003',
                'service_type' => 'Relocation Services',
                'base_rate' => 3500.00,
                'distance_rate' => 50.00,
                'travel_time_rate' => 800.00
            ],
            [
                'pricing_id' => 'PRC-1004',
                'service_type' => 'Event Transport',
                'base_rate' => 2500.00,
                'distance_rate' => 45.00,
                'travel_time_rate' => 700.00
            ],
            [
                'pricing_id' => 'PRC-1005',
                'service_type' => 'Cargo / Delivery Services',
                'base_rate' => 1800.00,
                'distance_rate' => 55.00,
                'travel_time_rate' => 500.00
            ],
            [
                'pricing_id' => 'PRC-1006',
                'service_type' => 'Private Shuttle Service',
                'base_rate' => 2200.00,
                'distance_rate' => 38.00,
                'travel_time_rate' => 550.00
            ]
        ];

        foreach ($rows as $row) {
            DB::table('pricing')->updateOrInsert(
                ['pricing_id' => $row['pricing_id']],
                [
                    'service_type' => $row['service_type'],
                    'base_rate' => $row['base_rate'],
                    'distance_rate' => $row['distance_rate'],
                    'travel_time_rate' => $row['travel_time_rate'],
                ]
            );
        }
    }
}
