<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        // Création d'un utilisateur normal
        User::updateOrCreate(
            ['email' => 'user@portfolio.com'],
            [
                'name' => 'Utilisateur Test',
                'email' => 'user@portfolio.com',
                'password' => Hash::make('password'), // ⚠️ mot de passe = password
                'role' => 'user',
            ]
        );
    }
}
