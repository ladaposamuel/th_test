<?php

namespace Database\Seeders;

use App\Models\Models\SpecSpecie;
use Illuminate\Database\Seeder;

class SpecSpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specieTypes = [
            [
                'specie_name' => 'Pine'
            ],
            [
                'specie_name' => 'Spruce'
            ],
            [
                'specie_name' => 'Fir'
            ],
            [
                'specie_name' => 'Birch'
            ],
            [
                'specie_name' => 'Apple Tree'
            ],

        ];


        foreach ($specieTypes as $sp) {
            SpecSpecie::create($sp);
        }
    }
}
