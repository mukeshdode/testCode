<?php

use Illuminate\Database\Seeder;
use App\saleorderTransaction;

class SalesOrdersTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salesOrder = array(
            array('sales_order_id'=>5, 'category_id'=>1,'tax_id'=>2, 'product_id'=>1,'vendor_id'=>1, 'cost_price'=>600),
            array('sales_order_id'=>5, 'category_id'=>2,'tax_id'=>2, 'product_id'=>2,'vendor_id'=>2, 'cost_price'=>300),
            array('sales_order_id'=>6, 'category_id'=>3,'tax_id'=>2, 'product_id'=>3,'vendor_id'=>1, 'cost_price'=>500),
            array('sales_order_id'=>6, 'category_id'=>1,'tax_id'=>2, 'product_id'=>4,'vendor_id'=>2, 'cost_price'=>700),
            array('sales_order_id'=>7, 'category_id'=>2,'tax_id'=>2, 'product_id'=>5,'vendor_id'=>1, 'cost_price'=>800),
            array('sales_order_id'=>7, 'category_id'=>2,'tax_id'=>2, 'product_id'=>6,'vendor_id'=>2, 'cost_price'=>400),
            array('sales_order_id'=>8, 'category_id'=>3,'tax_id'=>2, 'product_id'=>7,'vendor_id'=>2, 'cost_price'=>400)
        );
        if(Schema::hasTable('sales_orders')){
            saleorderTransaction::insert($salesOrder);
        }
    }
}
