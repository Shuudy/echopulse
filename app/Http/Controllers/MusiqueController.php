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
        $musiques = Musique::all();

        $nextMusique = Musique::where("id", ">", $musique['id'])->first();
        $backMusique = Musique::where("id", "<", $musique['id'])->orderBy('id','desc')->first();

        return view("layout", ['musiques' => $musiques, "musique" => $musique, 'nextMusique'=> $nextMusique, 'backMusique'=> $backMusique]);
    }
}