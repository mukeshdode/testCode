<?php

use Illuminate\Database\Seeder;
use App\saleorder;

class SalesOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $salesOrder = array(
            array('tax_id'=>2, 'user_id'=>1 ,'sub_total'=>300 , 'tax_total'=>50, 'delivery_cost'=>20, 'final_amount'=> 500),
            array('tax_id'=>2, 'user_id'=>2,'sub_total'=>300 , 'tax_total'=>50, 'delivery_cost'=>20, 'final_amount'=> 500),
            array('tax_id'=>2, 'user_id'=>1 ,'sub_total'=>300 , 'tax_total'=>50, 'delivery_cost'=>20, 'final_amount'=> 500),
            array('tax_id'=>2, 'user_id'=>2,'sub_total'=>300 , 'tax_total'=>50, 'delivery_cost'=>20, 'final_amount'=> 500),
        );
        if(Schema::hasTable('sales_orders')){
            saleorder::insert($salesOrder);
        }
    }
}
