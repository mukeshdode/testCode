<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saleorder extends Model
{
    protected $table = 'sales_orders';
    protected $fillable = [
        'tax_id', 'user_id','sub_total', 'tax_total','delivery_cost', 'final_amount'
    ];

    
    public function transactions(){
        return $this->hasMany(\App\saleorderTransaction::class, 'sales_order_id');
    }
    public function tax(){
        return $this->hasOne('App\Tax', 'id', 'tax_id');
    }
    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    
}
