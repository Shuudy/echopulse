<?php

namespace App\Http\Controllers;

use App\Models\Musique;
use Illuminate\Http\Request;

class MusiqueController extends Controller
{
    public function index() {
        $musiques = Musique::all();
        return view("layout", ['musiques' => $musiques]);
    }

    public function show(Musique $musique) {
        $musiques = Musique::select('id', 'titre', 'nom_artiste', 'album', 'chemin_fichier_audio', 'chemin_fichier_image')->get();       

        $nextMusique = $musiques->where('id', '>', $musique->id)->first() ?? $musiques->first();
        $backMusique = $musiques->where('id', '<', $musique->id)->last() ?? Musique::orderBy('id', 'desc')->first();

        return view("layout", ['musiques' => $musiques, "musique" => $musique, 'nextMusique'=> $nextMusique, 'backMusique'=> $backMusique]);
    }
}