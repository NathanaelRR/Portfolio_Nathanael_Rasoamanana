<?php

namespace Database\Seeders;
use App\Models\Projet;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Projet::create([
        'titre' => 'Portfolio Laravel',
        'description' => 'Un site portfolio pour présenter mes projets.',
        'type' => 'personnel',
        'images' => ['/images/portfolio1.png', '/images/portfolio2.png'],
        'acquis' => 'Laravel, Git, SQLite, déploiement',
        'technologies' => ['Laravel', 'PHP', 'SQLite', 'TailwindCSS'],
        ]);
    }
}
