<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'npm'=> 5520124039,
            'username' => 'admin',
            'first_name' => 'admin1',
            'last_name'=>'perpus',
            'email'	=> 'admin@peprus.com',
            'email_verified_at'=>now(),
            'password'=> Hash::make('admin1'),
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
    }
}
