<?php

use Illuminate\Database\Seeder;
use App\Tax;

class taxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taxes = array(
            array('name'=>'Five percent','tax_percent'=>5),
            array('name'=>'Twelve percent','tax_percent'=>12),
            array('name'=>'Eighteen','tax_percent'=>18),
            array('name'=>'Twenty Eight percent','tax_percent'=>28)
        );
        if(Schema::hasTable('taxes')){
            Tax::insert($taxes);
        }
    }
}
