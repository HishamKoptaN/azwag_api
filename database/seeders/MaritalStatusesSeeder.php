<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\MaritalStatus;

class MaritalStatusesSeeder extends Seeder
{
    public function run(): void
    {
        $maritalStatuses = [
            'عازب/عزباء',
            'مطلق/مطلقة',
            'مطلق بأولاد/مطلقة بأولاد',
            'أرملة',
            'معدد',
        ];
        foreach ($maritalStatuses as $maritalStatus) {
            MaritalStatus::create(
                [
                    'status' => $maritalStatus,
                ],
            );
        }
    }
}
