<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/buah', [HomeController::class, 'buah']);
Route::get('/kategori', [HomeController::class, 'kategori']);
Route::get('/supplier', [HomeController::class, 'supplier']);
