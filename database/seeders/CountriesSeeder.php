<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('countries')->insert(
            [
                [
                    'code' => 'EG',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'SA',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'QR',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'AE',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'OM',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'KW',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'BH',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'IQ',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'JO',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'LB',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'SY',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'YE',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'SD',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'LY',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'MA',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'DZ',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'TN',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'PS',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
