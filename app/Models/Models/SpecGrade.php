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

}
