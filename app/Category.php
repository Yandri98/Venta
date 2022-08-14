<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model    // La migración se la llama en el modelo para la categoria
{
    protected $fillable = [
        'name', 'description',
    ];

    public function products(){   //Relacionando las tablas
        return $this->hasMany(Product::class);
    }
}
