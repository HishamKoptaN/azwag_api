<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CommitmentDegree;

class CommitmentDegreeSeeder extends Seeder
{

    public function run(): void
    {
        $commitmentDegrees = [
            'ملتزم/ة جدا',
            'ملتزم/ة',
            'محافظ/ة',
            'وسطي التدين',
            'غير ملتزم/ة',
        ];
        foreach ($commitmentDegrees as $commitmentDegree) {
            CommitmentDegree::create(
                [
                    'degree' => $commitmentDegree,
                ],
            );
        }
    }
}
