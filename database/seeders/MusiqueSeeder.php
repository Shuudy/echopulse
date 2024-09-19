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
            ['titre' => 'apdl', 'nom_artiste'=> 'Alpha wann', 'album' => 'Don dada mixtape', 'date_sortie' => '2024-09-19', 'chemin_fichier_audio' => 'apdl.mp3', 'chemin_fichier_image' => 'apdl.jpg'],
            ['titre' => 'Mami Wata', 'nom_artiste'=> 'Gazo', 'album' => 'La Melo est gangx', 'date_sortie' => '2024-09-18', 'chemin_fichier_audio' => 'mami_wata.mp3', 'chemin_fichier_image' => 'mami_wata.webp'],
            ['titre' => 'Nouvelles', 'nom_artiste'=> 'PLK', 'album' => '2069', 'date_sortie' => '2024-09-18', 'chemin_fichier_audio' => 'nouvelles.mp3', 'chemin_fichier_image' => 'nouvelles.jpg'],
            ['titre' => 'Tuyo (Narcos Theme)', 'nom_artiste'=> 'Rodrigo Amarante', 'album' => 'Single', 'date_sortie' => '2024-09-19', 'chemin_fichier_audio' => 'tuyo_narcos.mp3', 'chemin_fichier_image' => 'tuyo_narcos.jpg'],
            ['titre' => 'Superstar', 'nom_artiste'=> 'Jul', 'album' => 'Extraterrestre', 'date_sortie' => '2024-09-18', 'chemin_fichier_audio' => 'superstar.mp3', 'chemin_fichier_image' => 'superstar.jpg'],
            ['titre' => 'Hess', 'nom_artiste'=> 'Gambi', 'album' => 'Single', 'date_sortie' => '2024-09-18', 'chemin_fichier_audio' => 'hess.mp3', 'chemin_fichier_image' => 'hess.jpg'],
            ['titre' => 'TOTALLY SPIES', 'nom_artiste'=> 'Houdi', 'album' => 'Le dernier rayon de soleil', 'date_sortie' => '2024-09-19', 'chemin_fichier_audio' => 'totally_spies.mp3', 'chemin_fichier_image' => 'totally_spies.jpg'],
        ];
        Musique::insert($musiques);
    }
}
