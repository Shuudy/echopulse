<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/layout', 'layout');

Route::prefix('/musique')->group(function(){
    Route::get('/', [MusiqueController::class, "index"]);
    Route::get('/{musique}', [MusiqueController::class, "show"])->name("musique.show");
});
