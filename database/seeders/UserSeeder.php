<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
            'role_id' => 1,
            'gender_id' => 1,
            'first_name' => 'Admin',
            'middle_name' => 'One',
            'last_name' => 'First',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('admin231'),
            'display_picture_link' => 'https://randomuser.me/api/portraits/thumb/men/30.jpg',
            'delete_flag' => 0
            ],

            [
            'role_id' => 2,
            'gender_id' => 2,
            'first_name' => 'User',
            'middle_name' => 'One',
            'last_name' => 'First',
            'email' => 'user123@gmail.com',
            'password' => Hash::make('user2310'),
            'display_picture_link' => 'https://randomuser.me/api/portraits/thumb/men/31.jpg',
            'delete_flag' => 0
            ]
        ]);
    }
}
