<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    use HasFactory;

    public $fillable = [
        'product_id',
        'product_thickness',
        'product_width',
        'product_length',
        'spec_specie_id',
        'spec_grade_id',
        'spec_treatment_id',
        'spec_dry_method_id',
    ];
}
