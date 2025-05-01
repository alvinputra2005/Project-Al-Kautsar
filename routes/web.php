<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Halaman testimoni
Route::get('/ulasan', [PageController::class, 'testimoni'])->name('testimoni');

// Halaman Contact
Route::get('tendik', [PageController::class, 'tendik'])->name('tendik');