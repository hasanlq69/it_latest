<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data user
        $userCreate = User::create([
            'name'      => 'hasanlq69',
            'email'     => 'hasanlq69@gmail.com',
            'fullname' =>'Muhammad Hasan',
            'password'  => bcrypt('password')
           
        ]);
    }
}
