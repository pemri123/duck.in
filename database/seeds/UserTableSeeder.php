<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'id'=> 1,'name'=>'Jhon','email'=>'jhon12@gmail.com','password'=>bcrypt('dd1104da'),'role'=> 1
        ]);
    }
}
