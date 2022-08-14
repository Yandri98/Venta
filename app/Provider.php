 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $filetable = [
        'name','email','ruc_number','address','phone'
    ];

    public function products(){   //Relacionando las tablas
        return $this->hasMany(Product::class);
    } 
}
