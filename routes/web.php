<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salamController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\InfosController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/acceuil', [salamController::class,'index']);
Route::get('/profil', [ProfilController::class,'index']);
Route::get('/infos', [InfosController::class,'index']);

