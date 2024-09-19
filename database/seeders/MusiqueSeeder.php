<?php

namespace Database\Seeders;

use App\Models\Musique;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MusiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $musiques = [
            ['titre' => 'apdl', 'nom_artiste'=> 'Alpha wann', 'album' => 'Don dada maxtape', 'date_sortie' => '2024-09-19', 'chemin_fichier_audio' => 'musique3.mp3', 'chemin_fichier_image' => 'musique4.jpg'],
            ['titre' => 'Mami Wata', 'nom_artiste'=> 'Gazo', 'album' => 'La Melo est gangx', 'date_sortie' => '2024-09-18', 'chemin_fichier_audio' => 'musique1.mp3', 'chemin_fichier_image' => 'musique2.webp'],
            ['titre' => 'Nouvelles', 'nom_artiste'=> 'PLK', 'album' => '2069', 'date_sortie' => '2024-09-18', 'chemin_fichier_audio' => 'musique2.mp3', 'chemin_fichier_image' => 'musique3.jpg']
        ];
        Musique::insert($musiques);
    }
}
