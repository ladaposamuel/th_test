<?php

namespace Database\Seeders;

use App\Models\Models\GradeName;
use Illuminate\Database\Seeder;

class GradeNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            [
                'grade_name' => 'Nordic Blue'
            ],
            [
                'grade_name' => 'Tegernseer'
            ]

        ];


        foreach ($grades as $g) {
            GradeName::create($g);
        }
    }
}
