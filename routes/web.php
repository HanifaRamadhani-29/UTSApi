<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PremierLeagueController;
use App\Http\Controllers\Api\GamingController;

// Route untuk mendapatkan semua game
Route::get('api/gaming', [GamingController::class,'getGaming']);

Route::get('/', function () {
    return view('welcome');
});
