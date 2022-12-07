<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        if (User::count() == 0) {
            User::create([
                'name' => 'Salman Abbas',
                'email' => 'salmanabbas@gmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 'admin'
            ]);
            User::create([
                'name' => 'Mohammad Ali',
                'email' => 'muhammadali@gmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 'student'
            ]);
            User::create([
                'name' => 'Muhammad Huzaifa',
                'email' => 'muhammadhuzaifa@gmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 'teacher'
            ]);
        }
    }
}
