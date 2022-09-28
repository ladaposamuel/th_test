<?php

namespace Database\Seeders;

use App\Models\Models\SpecTreatment;
use Illuminate\Database\Seeder;

class SpecTreatmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treatementTypes = [
            [
                'treatment_name' => 'Heat Treated'
            ],
            [
                'treatment_name' => 'Anti-stain Treatment'
            ]
        ];


        foreach ($treatementTypes as $tp) {
            SpecTreatment::create($tp);
        }
    }
}
