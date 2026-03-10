<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the payments table with initial data.
     */
    public function run()
    {
        $rows = [
            [
                'reservation_id' => 'RES-20250924011822',
                'distance' => 2.138218,
                'travel_time' => 343,
                'total_amount' => 2417.60199,
                'payment_method' => 'Gcash',
                'reference_number' => '',
                'paid_at' => '2025-10-02 18:25'
            ],
            [
                'reservation_id' => 'RES-20250924015502',
                'distance' => 18.052126,
                'travel_time' => 1700,
                'total_amount' => 5202.6063,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-02 18:04'
            ],
            [
                'reservation_id' => 'RES-20251001120647',
                'distance' => 18.052173,
                'travel_time' => 1700,
                'total_amount' => 5202.60865,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-06 23:52'
            ],
            [
                'reservation_id' => 'RES-20251006115512',
                'distance' => 18.052173,
                'travel_time' => 1700,
                'total_amount' => 2131.826055,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-06 23:55'
            ],
            [
                'reservation_id' => 'RES-20251007023052',
                'distance' => 14.341549,
                'travel_time' => 1474,
                'total_amount' => 3173.66196,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-08 11:49'
            ],
            [
                'reservation_id' => 'RES-20251007103453',
                'distance' => 5.554561,
                'travel_time' => 569,
                'total_amount' => 1694.409635,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-07 15:56'
            ],
            [
                'reservation_id' => 'RES-20251007103634',
                'distance' => 2.138218,
                'travel_time' => 343,
                'total_amount' => 2685.52872,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-07 13:00'
            ],
            [
                'reservation_id' => 'RES-20251007120336',
                'distance' => 5.554561,
                'travel_time' => 569,
                'total_amount' => 4577.72805,
                'payment_method' => 'PayMaya',
                'reference_number' => '',
                'paid_at' => '2025-10-07 00:07'
            ],
            [
                'reservation_id' => 'RES-20251008045846',
                'distance' => 2.138218,
                'travel_time' => 343,
                'total_amount' => 1574.83763,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-08 17:00'
            ],
            [
                'reservation_id' => 'RES-20251008115040',
                'distance' => 14.341549,
                'travel_time' => 1474,
                'total_amount' => 2001.954215,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-08 11:51'
            ],
            [
                'reservation_id' => 'RES-20251008115331',
                'distance' => 2.138218,
                'travel_time' => 343,
                'total_amount' => 4406.9109,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-08 11:54'
            ],
            [
                'reservation_id' => 'RES-20251008122051',
                'distance' => 2.138218,
                'travel_time' => 343,
                'total_amount' => 3296.21981,
                'payment_method' => 'PayMaya',
                'reference_number' => 12345,
                'paid_at' => '2025-10-08 12:21'
            ],
            [
                'reservation_id' => 'RES-20251008123751',
                'distance' => 2.138218,
                'travel_time' => 343,
                'total_amount' => 2685.52872,
                'payment_method' => 'Cash',
                'reference_number' => '',
                'paid_at' => '2025-10-08 12:39'
            ],
            [
                'reservation_id' => 'RES-20251016061113',
                'distance' => 5.055663,
                'travel_time' => 509,
                'total_amount' => 1676.948205,
                'payment_method' => '',
                'reference_number' => '',
                'paid_at' => ''
            ]
        ];

        DB::table('payments')->upsert(
            $rows,
            ['reservation_id'],
            ['distance', 'travel_time', 'total_amount', 'payment_method', 'reference_number', 'paid_at']
        );
    }
}
