<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/menu', [PublicController::class, 'menu'])->name('menu');
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('about');
Route::get('/punti-vendita', [PublicController::class, 'locations'])->name('locations'); 