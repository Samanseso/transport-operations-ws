<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the logs table with initial data.
     */
    public function run()
    {
        DB::table('logs')->insert([
            [
                'datelog' => '2025-09-24',
                'timelog' => '13:18:32',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20250924011822',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '13:20:33',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20250924011822',
                'description' => 'Dispatch was assigned to Elena Reyes / Mercedes Actros.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '13:21:01',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20250924011822',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '13:21:14',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20250924011822',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '13:55:58',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20250924015502',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '13:55:58',
                'action' => 'ADD',
                'module' => 'CUSTOMERS',
                'performed_to' => 'Sample',
                'description' => 'Customer record for Sample was created.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '14:08:31',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20250924015502',
                'description' => 'Dispatch was assigned to Miguel Cruz / Mitsubishi Fuso.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '14:29:34',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20250924015502',
                'description' => 'Dispatch was reassigned to Elena Reyes / Mercedes Actros.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '14:30:05',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20250924015502',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-09-24',
                'timelog' => '14:30:32',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20250924015502',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-09-30',
                'timelog' => '23:47:20',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20250924011822',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-09-30',
                'timelog' => '23:47:34',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20250924015502',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-01',
                'timelog' => '00:07:05',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251001120647',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-01',
                'timelog' => '00:07:12',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251001120647',
                'description' => 'Dispatch was assigned to Elena Reyes / Mitsubishi Fuso.'
            ],
            [
                'datelog' => '2025-10-01',
                'timelog' => '00:07:33',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251001120647',
                'description' => 'Dispatch was reassigned to Miguel Cruz / Mercedes Actros.'
            ],
            [
                'datelog' => '2025-10-01',
                'timelog' => '00:08:09',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251001120647',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-01',
                'timelog' => '00:08:25',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251001120647',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-02',
                'timelog' => '17:27:10',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251001120647',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-02',
                'timelog' => '18:04:07',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20250924015502',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-02',
                'timelog' => '18:25:07',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20250924011822',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:40:33',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => '44643a5e-64e0-4de8-b',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:40:38',
                'action' => 'DELETE',
                'module' => 'DRIVERS',
                'performed_to' => '44643a5e-64e0-4de8-b',
                'description' => 'Driver was deleted'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:45:28',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251006114518',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:52:37',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251001120647',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:55:24',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251006115512',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:55:29',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251006115512',
                'description' => 'Dispatch was assigned to Miguel Cruz / Mitsubishi Fuso.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:55:41',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251006115512',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:55:43',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251006115512',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-06',
                'timelog' => '23:55:46',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251006115512',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:05:53',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007120336',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:05:53',
                'action' => 'ADD',
                'module' => 'CUSTOMERS',
                'performed_to' => 'Mariel',
                'description' => 'Customer record for Mariel was created.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:06:13',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251007120336',
                'description' => 'Dispatch was assigned to Elena Reyes / Mercedes Actros.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:06:50',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007120336',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:07:08',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007120336',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:07:30',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007120336',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:12:16',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251007001211',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '00:12:22',
                'action' => 'DELETE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251007001211',
                'description' => 'Driver was deleted'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:35:01',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007103453',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:35:06',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251007103453',
                'description' => 'Dispatch was assigned to Miguel Cruz / Mitsubishi Fuso.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:35:13',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007103453',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:35:16',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007103453',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:36:43',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007103634',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:36:47',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251007103634',
                'description' => 'Dispatch was assigned to Elena Reyes / Mercedes Actros.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:36:59',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007103634',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:37:00',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007103634',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '10:48:52',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251006114518',
                'description' => 'Dispatch was assigned to Elena Reyes / Mercedes Actros.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '11:32:55',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007113243',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '12:03:30',
                'action' => 'UPDATED',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-1001',
                'description' => 'Vechicle was retired.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '12:40:37',
                'action' => 'UPDATED',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251007001108',
                'description' => 'Driver was retired.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '12:59:34',
                'action' => 'DELETE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251007001108',
                'description' => 'Driver was deleted'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '13:00:53',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007103634',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '14:31:55',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007023052',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '14:31:55',
                'action' => 'ADD',
                'module' => 'CUSTOMERS',
                'performed_to' => 'New Customer',
                'description' => 'Customer record for New Customer was created.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:55:58',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007103453',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:56:02',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007103453',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:56:08',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251006114518',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:56:10',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251006114518',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:56:45',
                'action' => 'UPDATE',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-1001',
                'description' => 'Vehicle information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:56:50',
                'action' => 'UPDATE',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-1004',
                'description' => 'Vehicle information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:56:53',
                'action' => 'UPDATE',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-1003',
                'description' => 'Vehicle information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:56:56',
                'action' => 'UPDATE',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-1002',
                'description' => 'Vehicle information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:57:03',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-1002',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:57:08',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-1005',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:57:11',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-1003',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-07',
                'timelog' => '15:57:15',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-1001',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:49:38',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251007023052',
                'description' => 'Dispatch was assigned to Clarisse Reyes / Hino 500.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:49:50',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007023052',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:49:54',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251007023052',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:50:50',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008115040',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:50:55',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251008115040',
                'description' => 'Dispatch was assigned to Clarisse Reyes / Hino 500.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:51:10',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008115040',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:51:13',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008115040',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:51:17',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008115040',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:53:43',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008115331',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:53:50',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251008115331',
                'description' => 'Dispatch was assigned to Clarisse Reyes / Hino 500.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:53:56',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008115331',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:54:01',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008115331',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '11:54:05',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008115331',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:21:01',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008122051',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:21:08',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251008122051',
                'description' => 'Dispatch was assigned to Clarisse Reyes / Hino 500.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:21:14',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008122051',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:21:16',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008122051',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:21:23',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008122051',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:38:02',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008123751',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:38:09',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251008123751',
                'description' => 'Dispatch was assigned to Clarisse Reyes / Hino 500.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:39:20',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008123751',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:39:23',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008123751',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:39:27',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008123751',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:47:15',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251008124626',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:47:43',
                'action' => 'DELETE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251008124626',
                'description' => 'Driver was deleted'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:49:25',
                'action' => 'ADD',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-124924',
                'description' => 'Vehicle was created.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:50:34',
                'action' => 'UPDATE',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-124924',
                'description' => 'Vehicle information was updated.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '12:51:31',
                'action' => 'DELETE',
                'module' => 'VEHICLES',
                'performed_to' => 'VH-124924',
                'description' => 'Vechicle was deleted.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '16:59:25',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008045846',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '16:59:35',
                'action' => 'UPDATE',
                'module' => 'RESERVATION',
                'performed_to' => 'RES-20251008045846',
                'description' => 'Dispatch was assigned to Clarisse Reyes / Hino 500.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '17:00:14',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008045846',
                'description' => 'Dispatch is en route.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '17:00:29',
                'action' => 'UPDATE',
                'module' => 'RSESRVATION',
                'performed_to' => 'RES-20251008045846',
                'description' => 'Dispatch is delivered.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '17:00:49',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251008045846',
                'description' => 'Reservation is paid.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '17:02:12',
                'action' => 'UPDATE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251008170156',
                'description' => 'Driver information was updated.'
            ],
            [
                'datelog' => '2025-10-08',
                'timelog' => '17:02:26',
                'action' => 'DELETE',
                'module' => 'DRIVERS',
                'performed_to' => 'DRV-20251008170156',
                'description' => 'Driver was deleted'
            ]
        ]);

        DB::table('logs')->insert([
            [
                'datelog' => '2025-10-15',
                'timelog' => '07:06:21',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251007113243',
                'description' => 'Dispatch was assigned to Clarisse Reyes / Hino 500.'
            ],
            [
                'datelog' => '2025-10-16',
                'timelog' => '18:12:13',
                'action' => 'ADD',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251016061113',
                'description' => 'Reservation was created.'
            ],
            [
                'datelog' => '2025-10-16',
                'timelog' => '18:12:14',
                'action' => 'ADD',
                'module' => 'CUSTOMERS',
                'performed_to' => 'Gab',
                'description' => 'Customer record for Gab was created.'
            ],
            [
                'datelog' => '2025-10-16',
                'timelog' => '18:16:51',
                'action' => 'UPDATE',
                'module' => 'RESERVATIONS',
                'performed_to' => 'RES-20251016061113',
                'description' => 'Dispatch was assigned to Marco Diaz / Isuzu NQR.'
            ]
        ]);
    }
}