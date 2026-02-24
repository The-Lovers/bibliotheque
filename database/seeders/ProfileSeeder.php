<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'label' => 'admin',
                'description' => 'Administrateur du système avec tous les droits.'
            ],
            [
                'label' => 'librarian',
                'description' => 'Bibliothécaire pouvant gérer les livres et les emprunts.'
            ],
            [
                'label' => 'reader',
                'description' => 'Lecteur pouvant consulter et emprunter des livres.'
            ],
        ];

        foreach ($profiles as $profile) {
            Profile::create($profile);
        }
    }
}
