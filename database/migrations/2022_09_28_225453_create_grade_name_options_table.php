<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Models\GradeName;

class CreateGradeNameOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_name_options', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(GradeName::class);
            $table->string('grade_option')->comment('Grade Option e.g A1');
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
        Schema::dropIfExists('grade_name_options');
    }
}
