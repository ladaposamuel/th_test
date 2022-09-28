<?php

namespace Database\Seeders;

use App\Models\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_code' => '000001',
                'product_specification_id' => 1,
            ],
            [
                'product_code' => '000002',
                'product_specification_id' => 2,
            ],
            [
                'product_code' => '000003',
                'product_specification_id' => 3,
            ],
            [
                'product_code' => '000004',
                'product_specification_id' => 4,
            ],
            [
                'product_code' => '000005',
                'product_specification_id' => 5,
            ],
            [
                'product_code' => '000006',
                'product_specification_id' => 6,
            ]
        ];


        foreach ($products as $product) {
            Product::create($product);
        }
    }


}
