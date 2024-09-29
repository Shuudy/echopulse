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

    public function create() {
        return view('add_music');
    }

    public function store(Request $request) {

        $request->validate([
            'titre' => 'required|string|max:255',
            'nom_artiste' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'fichier_audio' => 'required|file|mimes:mp3,wav',
            'fichier_image' => 'required|file|mimes:jpg,jpeg,png',
        ]);

        
    }
}