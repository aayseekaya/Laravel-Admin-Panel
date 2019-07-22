<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Faker\Factory as Faker;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////
        $faker =Faker::create();
        User::create([
            'name'    => $faker->name,
            'email'    => $faker->email,
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
        ]);
    }
}

