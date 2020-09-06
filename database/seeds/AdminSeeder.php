<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [array('name'=>'admin','email'=>'admin@gmail.com', 'password'=> Hash::make('admin123'))];
        if(Schema::hasTable('admins')){
            Admin::insert($adminUser);
        }
    }
}
