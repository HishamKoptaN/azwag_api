<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\EducationalLevel;

class EducationalLevelsSeeder extends Seeder
{
    public function run(): void
    {
        $educationalLevels = [
            'دبلوم',
            'بكالوريوس',
            'ماجستير',
            'دكتوراه',
            'أقل من دبلوم',
            'لا يهم',
        ];
        foreach ($educationalLevels as $educationalLevel) {
            EducationalLevel::create(
                [
                    'level' => $educationalLevel,
                ],
            );
        }
    }
}
