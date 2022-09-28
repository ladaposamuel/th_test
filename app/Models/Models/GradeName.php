<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeName extends Model
{
    use HasFactory;


    public $fillable = [
        'grade_name'
    ];
}
