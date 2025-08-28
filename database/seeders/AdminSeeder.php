<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@portfolio.com'], // clé unique
            [
                'name' => 'Odd Jerome',
                'email' => 'admin@portfolio.com',
                'password' => Hash::make('password'), // mot de passe : password
                'role' => 'admin'
            ]
        );
    }
}
