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
        return view("layout", ['musiques' => $musiques, "musique" => $musique]);
    }
}
