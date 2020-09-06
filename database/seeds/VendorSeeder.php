<?php

use Illuminate\Database\Seeder;
use App\Vendor;
use Illuminate\Support\Facades\Hash;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorUser = [
            array('name'=>'vendor','email'=>'vendor@gmail.com', 'password'=> Hash::make('admin123')),
            array('name'=>'vendor2','email'=>'vendor2@gmail.com', 'password'=> Hash::make('admin123'))
        ];
        
        if(Schema::hasTable('vendors')){
            Vendor::insert($vendorUser);
        }
    }
}
