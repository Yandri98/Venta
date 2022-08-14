<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filetable = [
    'code',
    'name',
    'stock',
    'image',  
    'sell_price',
    'status',
    'category_id',
    'provider_id',
    ];

    public function category(){     //Relacionando las tablas
        return $this->belongsTo(Category::class);
    }
    
    public function provider(){
        return $this->belongsTo(Provider::class);
    }


}
