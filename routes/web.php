<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusiqueController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/layout', 'layout');

Route::prefix('/musique')->group(function(){
    Route::get('/', [MusiqueController::class, "index"]);
    Route::get('/{musique}', [MusiqueController::class, "show"])->name("musique.show");
});
