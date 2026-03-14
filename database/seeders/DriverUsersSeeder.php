<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverUsersSeeder extends Seeder
{
    /**
     * Seed driver user accounts mapped to driver_id.
     */
    public function run()
    {
        $passwordHash = '$2y$12$bGIhgaRMtr0Pz3T0hH.3wObSW1CNYTe8qJb8HC.ivvO25ucnqe1Tm';

        $rows = [
            [
                'name' => 'Clarisse Reyes',
                'email' => 'sample@driver1',
                'role' => 'DRIVER',
                'role_id' => 'DRV-1001',
            ],
            [
                'name' => 'Marco Diaz',
                'email' => 'sample@driver2',
                'role' => 'DRIVER',
                'role_id' => 'DRV-1002',
            ],
            [
                'name' => 'Miguel Cruz',
                'email' => 'sample@driver3',
                'role' => 'DRIVER',
                'role_id' => 'DRV-1003',
            ],
            [
                'name' => 'Elena Reyes',
                'email' => 'sample@driver4',
                'role' => 'DRIVER',
                'role_id' => 'DRV-1004',
            ],
            [
                'name' => 'Peter Santos',
                'email' => 'sample@driver5',
                'role' => 'DRIVER',
                'role_id' => 'DRV-1005',
            ],
        ];

        foreach ($rows as $row) {
            DB::table('users')->updateOrInsert(
                ['email' => $row['email']],
                [
                    'name' => $row['name'],
                    'role' => $row['role'],
                    'role_id' => $row['role_id'],
                    'password' => $passwordHash,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
