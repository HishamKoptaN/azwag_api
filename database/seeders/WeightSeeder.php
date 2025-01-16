<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Weight;

class WeightSeeder extends Seeder
{
    public function run(): void
    {
        $tribes = [
            'يميل للنحافة',
            'يميل للبدانة',
            'لا يهم',
        ];
        foreach ($tribes as $tribe) {
            Weight::create(
                [
                    'name' => $tribe,
                ],
            );
        }
    }
}
