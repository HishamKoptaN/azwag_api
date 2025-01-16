<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MariageType;

class MariageTypesSeeder extends Seeder
{
    public function run(): void
    {
        $mariageTypes = [
            'معلن',
            'غير معلن',
            'حسب رغبة الطرف الأخر',
        ];
        foreach ($mariageTypes as $mariageType) {
            MariageType::create(
                [
                    'type' => $mariageType,
                ],
            );
        }
    }
}
