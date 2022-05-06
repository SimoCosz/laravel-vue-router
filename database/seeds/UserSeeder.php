<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //admin
        User::create([
            'name' => 'simone',
            'email' => 'coszach@hotmail.it',
            'password' => Hash::make('prova123'),
        ]);

        for ($i=0; $i < 10; $i++) { 
            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'password' => Hash::make($faker->password()),
            ]);
        }
    }
}
