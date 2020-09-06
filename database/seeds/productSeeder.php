<?php

use Illuminate\Database\Seeder;
use App\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            array('category_id'=>1,'tax_id'=>2 , 'title'=>'product 1','description'=>'product 1', 'cost_price'=>100,'delivery_cost'=>20),
            array('category_id'=>2,'tax_id'=>2 , 'title'=>'product 2','description'=>'product 2', 'cost_price'=>200,'delivery_cost'=>30),
            array('category_id'=>3,'tax_id'=>2 , 'title'=>'product 3','description'=>'product 3', 'cost_price'=>300,'delivery_cost'=>20),
            array('category_id'=>1,'tax_id'=>2 , 'title'=>'product 4','description'=>'product 4', 'cost_price'=>400,'delivery_cost'=>40),
            array('category_id'=>2,'tax_id'=>2 , 'title'=>'product 5','description'=>'product 5', 'cost_price'=>500,'delivery_cost'=>50),
            array('category_id'=>3,'tax_id'=>2 , 'title'=>'product 6','description'=>'product 6', 'cost_price'=>600,'delivery_cost'=>30),
            array('category_id'=>2,'tax_id'=>2 , 'title'=>'product 7','description'=>'product 7', 'cost_price'=>700,'delivery_cost'=>60),
            array('category_id'=>3,'tax_id'=>2 , 'title'=>'product 8','description'=>'product 8', 'cost_price'=>800,'delivery_cost'=>40),
            array('category_id'=>2,'tax_id'=>2 , 'title'=>'product 9','description'=>'product 9', 'cost_price'=>900,'delivery_cost'=>80),
           
        );
        if(Schema::hasTable('taxes')){
            Product::insert($products);
        }
    }
}
