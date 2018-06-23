<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'Admin',
        	'email'=>'admin@gmail.com',
        	'password'=>bcrypt('123456'),
        	'role'=>0
        ]);

        
        User::create([
        	'name'=>'Rupertiño',
        	'email'=>'client@gmail.com',
        	'password'=>bcrypt('123456'),
        	'role'=>2
        ]);
    }
}
