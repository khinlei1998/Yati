<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [TeamController::class, 'home']);
Route::get('/teamshow', [TeamController::class, 'teamshow']);
Route::get('/finale', [TeamController::class, 'finaleshow']);

