<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            array('name'=>'user 1','email'=>'user1@gmail.com', 'password'=> Hash::make('admin123')),
            array('name'=>'user 2','email'=>'user2@gmail.com', 'password'=> Hash::make('admin123'))
        ];
        
        if(Schema::hasTable('users')){
            User::insert($adminUser);
        }
    }
}
