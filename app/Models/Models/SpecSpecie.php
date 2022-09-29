<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecSpecie extends Model
{
    use HasFactory;


    public $fillable = [
        'specie_name'
    ];

    public function specie()
    {
        return $this->hasMany(ProductSpecification::class);
    }

}
