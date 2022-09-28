<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


use App\Models\Models\GradeName;
use App\Models\Models\GradeNameOptions;
use App\Models\Models\ProductSpecification;


class CreateSpecGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spec_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(GradeName::class);
            $table->foreignIdFor(GradeNameOptions::class);
            $table->foreignIdFor(ProductSpecification::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spec_grades');
    }
}
