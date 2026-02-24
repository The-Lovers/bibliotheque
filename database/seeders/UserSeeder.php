<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée un utilisateur admin
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $admin->profiles()->attach(Profile::where('label', 'admin')->first());

        // Crée un bibliothécaire
        $librarian = User::factory()->create([
            'name' => 'Bibliothécaire',
            'email' => 'librarian@example.com',
            'password' => Hash::make('password'),
        ]);

        $librarian->profiles()->attach(Profile::where('label', 'librarian')->first());

        // Crée un lecteur
        $reader = User::factory()->create([
            'name' => 'Lecteur',
            'email' => 'reader@example.com',
            'password' => Hash::make('password'),
        ]);

        $reader->profiles()->attach(Profile::where('label', 'reader')->first());
    }
}
