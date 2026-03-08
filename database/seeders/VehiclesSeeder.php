<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the vehicles table with initial data.
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            [
                'vehicle_id' => 'VH-1001',
                'driver_id' => 'DRV-1001',
                'plate_number' => 'ABC-1234',
                'model' => 'Hino 500',
                'capacity' => '10 tons',
                'status' => 'AVAILABLE',
                'created_at' => '2025-01-10 08:00:00',
                'updated_at' => '2025-09-23 17:56:02'
            ],
            [
                'vehicle_id' => 'VH-1002',
                'driver_id' => 'DRV-1002',
                'plate_number' => 'DEF-5678',
                'model' => 'Isuzu NQR',
                'capacity' => '8 tons',
                'status' => 'AVAILABLE',
                'created_at' => '2025-02-14 09:15:00',
                'updated_at' => '2025-09-23 17:09:28'
            ],
            [
                'vehicle_id' => 'VH-1003',
                'driver_id' => 'DRV-1003',
                'plate_number' => 'GHI-9012',
                'model' => 'Mitsubishi Fuso',
                'capacity' => '12 tons',
                'status' => 'AVAILABLE',
                'created_at' => '2025-03-05 07:45:00',
                'updated_at' => '2025-09-23 17:11:39'
            ],
            [
                'vehicle_id' => 'VH-1004',
                'driver_id' => 'DRV-1004',
                'plate_number' => 'JKL-3456',
                'model' => 'Volvo FMX',
                'capacity' => '15 tons',
                'status' => 'AVAILABLE',
                'created_at' => '2025-04-01 11:10:00',
                'updated_at' => '2025-09-23 17:12:57'
            ],
            [
                'vehicle_id' => 'VH-1005',
                'driver_id' => 'DRV-1005',
                'plate_number' => 'MNO-7890',
                'model' => 'Mercedes Actros',
                'capacity' => '18 tons',
                'status' => 'AVAILABLE',
                'created_at' => '2025-05-20 13:20:00',
                'updated_at' => '2025-09-04 15:40:00'
            ]
        ]);
    }
}