<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('users')->insert([
            'name' => $faker->name(),
            'email' => $faker->safeEmail(),
            'password' => Hash::make('password'),
            'center_id' => 1
        ]);
    }
}
