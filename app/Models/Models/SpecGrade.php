<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecGrade extends Model
{
    use HasFactory;


    public $fillable = [
        'grade_name_id',
        'grade_name_options_id',
        'product_specification_id'
    ];


    public function grade()
    {
        return $this->hasMany(ProductSpecification::class);
    }




    public function getGradeName()
    {
        return GradeName::where('id', $this->grade_name_id)->value('grade_name');
    }

    public function getGradeNameOption()
    {
        return GradeNameOptions::where('id', $this->grade_name_options_id)
            ->value('grade_option');
    }


}
