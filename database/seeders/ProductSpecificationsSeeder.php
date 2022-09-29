<?php

namespace Database\Seeders;

use App\Models\Models\ProductSpecification;
use Illuminate\Database\Seeder;

class ProductSpecificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productSpecifications = [
            [
                'product_id' => 1,
                'product_thickness' => 50,
                'product_width' => 150,
                'product_length' => 1200,
                'spec_specie_id' => 2,
                'spec_grade_id' => 1,
                'spec_treatment_id' => 1,
                'spec_dry_method_id' => 1,
            ],
            [
                'product_id' => 2,
                'product_thickness' => 50,
                'product_width' => 120,
                'product_length' => 1200,
                'spec_specie_id' => 2,
                'spec_grade_id' => 2,
                'spec_treatment_id' => 1,
                'spec_dry_method_id' => 1,
            ],
            [
                'product_id' => 3,
                'product_thickness' => 50,
                'product_width' => 100,
                'product_length' => 3000,
                'spec_specie_id' => 3,
                'spec_grade_id' => 3,
                'spec_treatment_id' => 1,
                'spec_dry_method_id' => 1,
            ],
            [
                'product_id' => 4,
                'product_thickness' => 50,
                'product_width' => 150,
                'product_length' => 1200,
                'spec_specie_id' => 3,
                'spec_grade_id' => 4,
                'spec_treatment_id' => 0,
                'spec_dry_method_id' => 1,
            ],
            [
                'product_id' => 5,
                'product_thickness' => 50,
                'product_width' => 150,
                'product_length' => 1200,
                'spec_specie_id' => 3,
                'spec_grade_id' => 5,
                'spec_treatment_id' => 0,
                'spec_dry_method_id' => 1,
            ],
            [
                'product_id' => 6,
                'product_thickness' => 50,
                'product_width' => 150,
                'product_length' => 1200,
                'spec_specie_id' => 1,
                'spec_grade_id' => 6,
                'spec_treatment_id' => 1,
                'spec_dry_method_id' => 1,
            ]
        ];



        foreach ($productSpecifications as $ps) {
            ProductSpecification::create($ps);
        }
    }
}
