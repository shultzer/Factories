<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $casts = [
      'resource' => 'array'
    ];
    public function factories () {
        return $this->belongsToMany(FactoryModel::class,'factory_recipe');
    }
}
