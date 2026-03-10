<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DispatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the dispatches table with initial data.
     */
    public function run()
    {
        $rows = [
            [
                'reservation_id' => 'a0c17092-4d04-462f-bcd6-9ea30fec3978',
                'status' => 'ASSIGNED',
                'vehicle_id' => 'VH-1001',
                'schedule' => '2026-01-04 19:40',
                'assigned_at' => '2026-01-04 11:39:37',
                'delivered_at' => null
            ],
            [
                'reservation_id' => 'a135a78a-5991-4e8c-999f-3bfb5df86080',
                'status' => null,
                'vehicle_id' => 'VH-1002',
                'schedule' => '2026-03-03 14:09',
                'assigned_at' => '2026-03-03 14:09:22',
                'delivered_at' => null
            ],
            [
                'reservation_id' => 'a135a8de-7016-49fd-ad8c-011fc9621e9b',
                'status' => null,
                'vehicle_id' => 'VH-1001',
                'schedule' => '2026-03-03 02:12',
                'assigned_at' => '2026-03-03 14:13:04',
                'delivered_at' => null
            ],
            [
                'reservation_id' => 'a135aa6d-24b9-4028-a59b-c36fa870c33d',
                'status' => null,
                'vehicle_id' => 'VH-1003',
                'schedule' => '2026-03-03 14:17',
                'assigned_at' => '2026-03-03 14:17:26',
                'delivered_at' => null
            ],
            [
                'reservation_id' => 'a135aae5-761e-48a8-ae94-fd183b133e05',
                'status' => null,
                'vehicle_id' => 'VH-1003',
                'schedule' => '2026-03-03 ',
                'assigned_at' => '2026-03-03 14:18:45',
                'delivered_at' => null
            ]
        ];

        DB::table('dispatches')->upsert(
            $rows,
            ['reservation_id'],
            ['status', 'vehicle_id', 'schedule', 'assigned_at', 'delivered_at']
        );
    }
}
