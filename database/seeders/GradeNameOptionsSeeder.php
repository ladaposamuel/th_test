<?php

namespace Database\Seeders;

use App\Models\Models\GradeNameOptions;
use Illuminate\Database\Seeder;

class GradeNameOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gradeOptions = [
            [
                'grade_name_id' => 1,
                'grade_option' => 'A1'
            ],
            [
                'grade_name_id' => 1,
                'grade_option' => 'A2'
            ],
            [
                'grade_name_id' => 1,
                'grade_option' => 'A3'
            ],
            [
                'grade_name_id' => 1,
                'grade_option' => 'A4'
            ],
            [
                'grade_name_id' => 1,
                'grade_option' => 'B'
            ],
            [
                'grade_name_id' => 2,
                'grade_option' => 'O'
            ],
            [
                'grade_name_id' => 2,
                'grade_option' => 'I'
            ],
            [
                'grade_name_id' => 2,
                'grade_option' => 'II'
            ],
            [
                'grade_name_id' => 2,
                'grade_option' => 'III'
            ],
            [
                'grade_name_id' => 2,
                'grade_option' => 'IV'
            ],
            [
                'grade_name_id' => 2,
                'grade_option' => 'V'
            ],


        ];


        foreach ($gradeOptions as $gp) {
            GradeNameOptions::create($gp);
        }
    }
}
