<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array('name'=>'Arts and Crafts Supplies','slug'=>'arts-and-crafts-supplies'),
            array('name'=>'Baby and Child Products','slug'=>'baby-and-child-products'),
            array('name'=>'Clothing','slug'=>'clothing')
        );
        if(Schema::hasTable('categories')){
            Category::insert($categories);
        }
    }
}
