<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(
            [

                CountriesSeeder::class,
                CitiesSeeder::class,
                SkinColorsSeeder::class,
                EmploymentStatusSeeder::class,
                MaritalStatusesSeeder::class,
                EducationalLevelsSeeder::class,
                MariageTypesSeeder::class,
                CommitmentDegreeSeeder::class,
                TribesSeeder::class,
                WeightSeeder::class,
                RequesterDataSeeder::class,
                RequestedDataSeeder::class,
                OrdersSeeder::class,
            ],
        );
    }
}
