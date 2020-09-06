<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saleorderTransaction extends Model
{
    protected $table = 'sales_orders_transactions';
    protected $fillable = [
        'sales_order_id', 'category_id','tax_id', 'product_id','vendor_id', 'cost_price'
    ];

    public function product(){
        return $this->hasOne(\App\Product::class, 'id', 'product_id');
    }
    public function category(){
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
    public function vendor(){
        return $this->hasOne('App\Vendor', 'id', 'vendor_id');
    }
}
