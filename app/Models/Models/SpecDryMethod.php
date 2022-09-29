<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecDryMethod extends Model
{
    use HasFactory;

    public $fillable = [
        'method_name'
    ];

    public function dryMethod()
    {
        return $this->hasMany(ProductSpecification::class);
    }


}
