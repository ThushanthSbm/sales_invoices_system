<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@mail.com'],
            [
                'f_name' => "Code",
                'l_name' => "Astro",
                'image' => "user.jpg",
                'password' => bcrypt('codeastro.com'),
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'test1@mail.com'],
            [
                'f_name' => "John",
                'l_name' => "Doe",
                'image' => "john.jpg",
                'password' => bcrypt('password123'),
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'test2@mail.com'],
            [
                'f_name' => "Jane",
                'l_name' => "Smith",
                'image' => "jane.jpg",
                'password' => bcrypt('password456'),
            ]
        );
    }
}
