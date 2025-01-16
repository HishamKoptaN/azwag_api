<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SkinColor; // تأكد من وجود الموديل SkinColor

class SkinColorsSeeder extends Seeder
{
    public function run(): void
    {
        $skinColorsList = [
            'بياض شامي',
            'ابيض',
            'حنطي فاتح',
            'حنطي',
            'اسمر',
            'أسود',
            'لا يهم',
        ];

        foreach ($skinColorsList as $skinColor) {
            SkinColor::create([
                'name' => $skinColor,
            ]);
        }
    }
}
