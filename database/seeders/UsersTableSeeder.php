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
            'name' => 'Bukola',
            'username' => 'bukola1',
            'email' => 'admin@gmail.com',
            'image' => 'default.png',
            'role' => 'admin',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Maya',
            'username' => 'maya1',
            'email' => 'author@gmail.com',
            'image' => 'default.png',
            'role' => 'author',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Ken',
            'username' => 'ken1',
            'email' => 'ken@gmail.com',
            'image' => 'default.png',
            'role' => 'user',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);

    }
}
