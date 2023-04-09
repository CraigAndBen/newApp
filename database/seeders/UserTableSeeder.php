<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('users')->insert([

            // Create Admin account
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@sample.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
            ],

            // Create Agent account
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@sample.com',
                'password' => Hash::make('222'),
                'role' => 'agent',
                'status' => 'active',
            ],

            // Create User account
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@sample.com',
                'password' => Hash::make('333'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
