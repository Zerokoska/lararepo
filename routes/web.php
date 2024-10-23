<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/awards', [MyController::class, 'index']);
Route::get("/top-rated-movies", [MovieController::class, "topRated"]);
Route::get("/games", [GameController::class, "games"]);