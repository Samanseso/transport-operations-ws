<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the reservations table with initial data.
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [
                'reservation_id' => 'a0c17092-4d04-462f-bcd6-9ea30fec3978',
                'customer_id' => 4,
                'status' => 'ASSIGNED',
                'pickup_address' => 'Independent Living Learning Center, Buenviaje Street, Plainview, Mandaluyong, Metro Manila, Philippines, 1550',
                'pickup_latlng' => '14.57826720924045,121.03672027587892',
                'dropoff_address' => 'Santo Niño Street, Purok 1, Santolan, Pasig, Metro Manila, Philippines, 1610',
                'dropoff_latlng' => '14.607671085585975,121.08787536621095',
                'date' => '2026-01-04',
                'time' => '19:40',
                'service_type' => 'Leisure / Personal Transport',
                'cargo_details' => null,
                'special_instructions' => null,
                'created_at' => '2026-01-04 11:39:37',
                'updated_at' => '2026-01-04 11:39:37'
            ],
            [
                'reservation_id' => 'a135a78a-5991-4e8c-999f-3bfb5df86080',
                'customer_id' => 4,
                'status' => 'PENDING',
                'pickup_address' => 'GKK Building, 1420, Santo Sepulcro Street, Paco, Barangay 815, Manila, Metro Manila, Philippines, 1007',
                'pickup_latlng' => '14.579596282748463,120.99620819091798',
                'dropoff_address' => 'Juan Gutierrez Street, Little Baguio, San Juan, Metro Manila, Philippines, 1500',
                'dropoff_latlng' => '14.600860367855892,121.03981018066408',
                'date' => '2026-03-03',
                'time' => '14:09',
                'service_type' => 'Corporate / Institutional Transport',
                'cargo_details' => null,
                'special_instructions' => null,
                'created_at' => '2026-03-03 14:09:22',
                'updated_at' => '2026-03-03 14:09:22'
            ],
            [
                'reservation_id' => 'a135a8de-7016-49fd-ad8c-011fc9621e9b',
                'customer_id' => 5,
                'status' => 'PENDING',
                'pickup_address' => 'Pan de Amerikana, Makati Avenue, Salcedo Village, Bel-Air, Makati, Metro Manila, Philippines, 1209',
                'pickup_latlng' => '14.56364687159736,121.02848052978517',
                'dropoff_address' => 'Saint Francis Street, Wack-Wack Greenhills, Mandaluyong, Metro Manila, Philippines, 1605',
                'dropoff_latlng' => '14.582254405707156,121.05800628662111',
                'date' => '2026-03-03',
                'time' => '02:12',
                'service_type' => 'Corporate / Institutional Transport',
                'cargo_details' => 'sad',
                'special_instructions' => null,
                'created_at' => '2026-03-03 14:13:04',
                'updated_at' => '2026-03-03 14:13:04'
            ],
            [
                'reservation_id' => 'a135aa6d-24b9-4028-a59b-c36fa870c33d',
                'customer_id' => 5,
                'status' => 'PENDING',
                'pickup_address' => 'Ortigas Avenue, Ugong, Pasig, Metro Manila, Philippines, 1604',
                'pickup_latlng' => '14.589896330494557,121.07843399047853',
                'dropoff_address' => 'Muntingdilaw, Antipolo, Calabarzon, Philippines, 1900',
                'dropoff_latlng' => '14.60052813232714,121.12306594848634',
                'date' => '2026-03-03',
                'time' => '14:17',
                'service_type' => 'Corporate / Institutional Transport',
                'cargo_details' => null,
                'special_instructions' => null,
                'created_at' => '2026-03-03 14:17:26',
                'updated_at' => '2026-03-03 14:17:26'
            ]
        ]);
    }
}