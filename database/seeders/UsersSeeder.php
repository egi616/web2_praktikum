<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_');

        for($i = 1; $i<=100; $i++){
            
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => '123123',
            ]);
        }
    }
}
