<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmploymentStatus;

class EmploymentStatusSeeder extends Seeder
{
    public function run(): void
    {
        $employmentStatuses = [
            'موظف/ة حكومي',
            'قطاع خاص',
            'بدون وظيفه',
            'رجل اعمال/سيدة اعمال',
            'متقاعد/ة',
        ];
        foreach ($employmentStatuses as $employmentStatus) {
            EmploymentStatus::create(
                [
                    'status' => $employmentStatus,
                ],
            );
        }
    }
}
