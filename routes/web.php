<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MusiqueController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/layout', 'layout');

Route::get('/musique',[MusiqueController::class,'index']);

Route::get('/musique/{musique}',[MusiqueController::class,'show'])->name("musique.show");
