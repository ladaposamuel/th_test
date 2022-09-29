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


    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function specie()
    {
        return $this->belongsTo(SpecSpecie::class, 'spec_specie_id');
    }

    public function treatement()
    {
        return $this->belongsTo(SpecTreatment::class, 'spec_treatment_id');
    }

    public function dryMethod()
    {
        return $this->belongsTo(SpecDryMethod::class, 'spec_dry_method_id');
    }
   public function grade()
    {
        return $this->belongsTo(SpecGrade::class, 'spec_grade_id');
    }

}
