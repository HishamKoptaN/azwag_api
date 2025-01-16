<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RequestedDataSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 40; $i++) {
            DB::table('requested_data')->insert(
                [
                    'min_age' => $faker->numberBetween(25, 30),
                    'max_age' => $faker->numberBetween(31, 36),
                    'marital_status_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'residence_area_id' =>  $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'educational_level_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'weight' =>  $faker->numberBetween(60, 80),
                    'skin_color_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'notes' => $faker->sentence,

                ],
            );
        }
    }
}
