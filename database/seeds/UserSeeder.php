<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'simone',
                'email'=>'coszach@hotmail.it',
                'password'=>'prova123'
            ],
        ];
        
        foreach ($users as $user) {

            $admin = new User();
            $admin->name = $user->name;
            $admin->email = $user->email;
            $admin->password = $user->password;
        }
    }
}
