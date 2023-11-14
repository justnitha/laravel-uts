<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('home');
// });

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\matkulController;
Route::get('/jadwal-kuliah', [matkulController::class, 'index']);

