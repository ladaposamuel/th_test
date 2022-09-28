<?php

namespace Database\Seeders;

use App\Models\Models\SpecDryMethod;
use Illuminate\Database\Seeder;

class SpecDryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dryMethods = [
            [
                'method_name' => 'Fresh'
            ],
            [
                'method_name' => 'Klin Dried'
            ],
            [
                'method_name' => 'Air Dried'
            ],

        ];


        foreach ($dryMethods as $m) {
            SpecDryMethod::create($m);
        }
    }
}
