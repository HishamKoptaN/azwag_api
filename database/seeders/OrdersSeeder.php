<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 40; $i++) {
            DB::table('orders')->insert(
                [
                    'requester_data_id' => $i,
                    'requested_data_id' => $i,
                ],
            );
        }
    }
}
