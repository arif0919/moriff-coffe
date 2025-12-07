<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;

Route::get('/', function () {
    return view('home');
});

// Menu Kopi
Route::get('/menu-kopi', [CoffeeController::class, 'menuKopi']);

// Jenis Kopi
Route::get('/jenis-kopi', [CoffeeController::class, 'jenisKopi']);

// Barista
Route::get('/barista', [CoffeeController::class, 'barista']);
