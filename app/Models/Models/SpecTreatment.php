<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecTreatment extends Model
{
    use HasFactory;

    public $fillable = [
        'treatment_name'
    ];


}
