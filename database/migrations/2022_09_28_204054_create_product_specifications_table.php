<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Models\Product;

use App\Models\Models\SpecDryMethod;
use App\Models\Models\SpecGrade;
use App\Models\Models\SpecSpecie;
use App\Models\Models\SpecTreatment;


class CreateProductSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Product::class);
            $table->integer('product_thickness');
            $table->integer('product_width');
            $table->integer('product_length');

            $table->foreignIdFor(SpecSpecie::class);
            $table->foreignIdFor(SpecGrade::class);
            $table->foreignIdFor(SpecTreatment::class)->nullable();
            $table->foreignIdFor(SpecDryMethod::class);

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
      Schema::dropIfExists('product_specifications');



    }
}
