<?php

use App\User;
use Illuminate\Database\Seeder;
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
        //admin
        User::create([
            'name' => 'simone',
            'email' => 'coszach@hotmail.it',
            'password' => Hash::make('prova123'),
        ]);
    }
}
