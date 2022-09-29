<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SpecTreatmentsSeeder::class);
        $this->call(SpecSpecieSeeder::class);
        $this->call(SpecDryMethodSeeder::class);
        $this->call(GradeNameSeeder::class);
        $this->call(GradeNameOptionsSeeder::class);

        $this->call(SpecGradesSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductSpecificationsSeeder::class);
    }
}
