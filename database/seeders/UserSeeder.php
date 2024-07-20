<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin_jatijajar',
            'email' => 'jatijajar@gmail.com',
            'password' => Hash::make('jajar666'),
        ]);
    }
}