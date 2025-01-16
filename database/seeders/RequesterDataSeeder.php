<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RequesterDataSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('ar_SA');
        for ($i = 0; $i < 40; $i++) {
            $gender = $faker->randomElement(['ذكر', 'أنثى']);
            $firstName = $gender === 'ذكر'
                ? $faker->randomElement(['أحمد', 'محمد', 'علي', 'حسن'])
                : $faker->randomElement(['منى', 'مريم', 'فاطمة', 'سارة']);

            $secondName = $faker->randomElement(['محمد', 'محمود', 'حسن', 'عبدالله']);

            DB::table('requester_data')->insert(
                [
                    'first_name' => $firstName,
                    'second_name' => $secondName,
                    'title' => $faker->title,
                    'mobile_number' => $faker->phoneNumber,
                    'gender' => $gender,
                    'nationality_id' =>
                    $faker->randomElement(
                        [
                            1,
                        ],
                    ),
                    'weight' => $faker->numberBetween(
                        60,
                        80,
                    ),
                    'age' => $faker->numberBetween(
                        25,
                        35,
                    ),
                    'skin_color_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'employment_status_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'commitment_degree_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'tribe_id' => $faker->randomElement(
                        [
                            1,
                            2,
                            3,
                        ],
                    ),
                    'tribe_name' => $faker->lastName,
                    'is_smoker' => $faker->boolean,
                    'marital_status_id' => $faker->randomElement(
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
                    'residence_area_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'origin_region' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'accept_another_nationality' => $faker->boolean,
                    'mariage_type_id' => $faker->randomElement(
                        [
                            1,
                            2,
                        ],
                    ),
                    'self_information' => $faker->paragraph,
                    'email' => $faker->email,
                ],
            );
        }
    }
}
