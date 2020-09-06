<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'category_id', 'tax_id','title', 'description','cost_price', 'delivery_cost'
    ];

    public function tax(){
        return $this->hasOne('App\Tax', 'id', 'tax_id');
    }    
}
