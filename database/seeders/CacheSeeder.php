<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the cache table with initial data.
     */
    public function run()
    {
        DB::table('cache')->insert([
            [
                'key' => 'laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab',
                'value' => 'i:1;',
                'expiration' => 1772783200
            ],
            [
                'key' => 'laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer',
                'value' => 'i:1772783200;',
                'expiration' => 1772783200
            ],
            [
                'key' => 'laravel_cache_sample@admin.com|127.0.0.1',
                'value' => 'i:1;',
                'expiration' => 1768971961
            ],
            [
                'key' => 'laravel_cache_sample@admin.com|127.0.0.1:timer',
                'value' => 'i:1768971961;',
                'expiration' => 1768971961
            ],
            [
                'key' => 'laravel_cache_sample@customer.com|127.0.0.1',
                'value' => 'i:1;',
                'expiration' => 1772514937
            ],
            [
                'key' => 'laravel_cache_sample@customer.com|127.0.0.1:timer',
                'value' => 'i:1772514937;',
                'expiration' => 1772514937
            ],
            [
                'key' => 'laravel_cache_sample@email.com|127.0.0.1',
                'value' => 'i:1;',
                'expiration' => 1772514930
            ],
            [
                'key' => 'laravel_cache_sample@email.com|127.0.0.1:timer',
                'value' => 'i:1772514930;',
                'expiration' => 1772514930
            ],
            [
                'key' => 'laravel_cache_winesevander4@email.com|127.0.0.1',
                'value' => 'i:2;',
                'expiration' => 1768971804
            ],
            [
                'key' => 'laravel_cache_winesevander4@email.com|127.0.0.1:timer',
                'value' => 'i:1768971803;',
                'expiration' => 1768971803
            ]
        ]);
    }
}