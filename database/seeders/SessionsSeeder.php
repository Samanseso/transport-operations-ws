<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the sessions table with initial data.
     */
    public function run()
    {
        $rows = [
            [
                'id' => 'bMdmHDIEg7aIllxRcK0FaZhYgE8fgjq5xZLWnTjz',
                'user_id' => null,
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQUZUZ1ZCR25MTUtKU25SY1lqaWdyekhtdFdEZzRiZE4yZEs3Z2s1SyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
                'last_activity' => 1772782579
            ],
            [
                'id' => 'hax7mq281FrhkZyuRQGpNcDvPPJWy6rKN8dCMS0S',
                'user_id' => null,
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmxPVTN2aUp1Qk9hV3RjejFSOVRzcThobkJLUXZDaGsyTGFJbkJJaiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
                'last_activity' => 1772782582
            ],
            [
                'id' => 'IT5GsWizIqlFUk8eEHhFTLHtl6FOHCmk5cXRve2j',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidWJGQUY1bVNGWFZrellRb3BhVUQ4YkVRdW9sa0g5bk5TNlh3MW5nVyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXR0aW5ncy9wYXNzd29yZCI7czo1OiJyb3V0ZSI7czoxMzoicGFzc3dvcmQuZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',
                'last_activity' => 1772783341
            ],
            [
                'id' => 'wXPVjNrmxr355hMKwb16LC52YWCgX7zuJIZk4IGp',
                'user_id' => null,
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFdaWkMyYVl4UG50TEt5ekhoeDEzTXUwODVZbmhsN0laeVhpMkQ2cCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
                'last_activity' => 1772782576
            ]
        ];

        DB::table('sessions')->upsert(
            $rows,
            ['id'],
            ['user_id', 'ip_address', 'user_agent', 'payload', 'last_activity']
        );
    }
}
