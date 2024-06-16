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
Route::get('/profil/{id}', [ProfilController::class,'show'])->name('profile.show');

Route::get('/create', [ProfilController::class, 'create']);

Route::post('/store', [ProfilController::class, 'store'])->name('store');

Route::get('/infos', [InfosController::class,'index']);

