<?php

namespace Database\Seeders;

use App\Models\Models\SpecGrade;
use Illuminate\Database\Seeder;

class SpecGradesSeeder extends Seeder
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
                'grade_name_id' => 1,
                'grade_name_options_id' => 1,
                'product_specification_id' => 1
            ],
            [
                'grade_name_id' => 1,
                'grade_name_options_id' => 1,
                'product_specification_id' => 2
            ],
            [
                'grade_name_id' => 1,
                'grade_name_options_id' => 1,
                'product_specification_id' => 3
            ],
            [
                'grade_name_id' => 1,
                'grade_name_options_id' => 1,
                'product_specification_id' => 4
            ],
            [
                'grade_name_id' => 1,
                'grade_name_options_id' => 1,
                'product_specification_id' => 5
            ],
            [
                'grade_name_id' => 2,
                'grade_name_options_id' => 10,
                'product_specification_id' => 6
            ],

        ];


        foreach ($grades as $g) {
            SpecGrade::create($g);
        }
    }
}
