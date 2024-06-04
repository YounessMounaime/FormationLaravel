<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salamController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/salam', [salamController::class,'index']);

