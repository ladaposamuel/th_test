<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'product_code',
        'production_specification_id'
    ];



    public function specifications()
    {
        return $this->hasOne(ProductSpecification::class);
    }
/*
    public function getall()
    {
        return [
            $this->dryMethod(),
            $this->specie(),
            $this->grade(),
            $this->treatment()
        ];
    }


    public function dryMethod()
    {

        return SpecDryMethod::where('id', $this->specifications->spec_dry_method_id)->value('method_name');
    }

    public function specie()
    {
        return SpecSpecie::where('id', $this->specifications->spec_specie_id)->value('specie_name');
    }

    public function grade()
    {
        return SpecGrade::where('product_specification_id',$this->specifications->spec_grade_id)->get();
    }

    public function treatment()
    {
        return SpecTreatment::where('id',$this->specifications->spec_treatment_id)->value('treatment_name');
    }
*/

}
