<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Bukola Ossai',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Maya Ossai',
            'username' => 'author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
