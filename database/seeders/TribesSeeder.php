<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tribe;

class TribesSeeder extends Seeder
{


    public function run(): void
    {
        $tribes = [
            'قبيلي ينتهي بقبيلة',
            'قبيلي ينتهي بعائله',
            'غير قبلي',
        ];
        foreach ($tribes as $tribe) {
            Tribe::create(
                [
                    'name' => $tribe,
                ],
            );
        }
    }
}
