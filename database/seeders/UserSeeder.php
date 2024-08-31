<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin_karangbrai',
            'email' => 'karangbrai@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

       
    }
}