<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\AlumnisController;
use Illuminate\Support\Facades\Route;

// Homepage (Landing Page)
Route::get('/', [PageController::class, 'home'])->name('home'); // Route utama ke halaman home
Route::get('home', [PageController::class, 'home'])->name('home');


// Halaman Login
Route::get('home/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('home/login', [LoginController::class, 'login']); // Proses login
Route::post('home/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman ulasan
Route::get('home/ulasan2', [UlasanController::class, 'index2'])->name('ulasan.index2');
Route::get('home/create/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');  // Menampilkan ulasan untuk semua orang
Route::get('home/create', [UlasanController::class, 'create'])->name('ulasan.create'); // Halaman tambah ulasan tanpa login
Route::post('home/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');  // Proses tambah ulasan
Route::get('home/ulasan/{id}/edit', [UlasanController::class, 'edit'])->name('ulasan.edit');  // Halaman edit ulasan
Route::put('home/ulasan/{id}', [UlasanController::class, 'update'])->name('ulasan.update');  // Proses update ulasan
Route::delete('home/ulasan/{id}', [UlasanController::class, 'destroy'])->name('ulasan.destroy');  // Proses delete ulasan

// Halaman Alumni
Route::get('home/alumni2', [AlumnisController::class, 'index'])->name('alumni2.index');
Route::get('home/alumni/create', [AlumnisController::class, 'create'])->name('alumni.create');
Route::post('home/alumni', [AlumnisController::class, 'store'])->name('alumni.store');
Route::get('home/alumni/{id}/edit', [AlumnisController::class, 'edit'])->name('alumni.edit');
Route::put('home/alumni/{id}', [AlumnisController::class, 'update'])->name('alumni.update');
Route::delete('home/alumni/{id}', [AlumnisController::class, 'destroy'])->name('alumni.destroy');

// Halaman tendik
use App\Http\Controllers\TendikController;

Route::get('/tendik/index2', [TendikController::class, 'index2'])->name('tendik.index2');


// Halaman kegiatan
Route::get('home/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');

// Halaman prestasi
Route::get('home/prestasi',[PrestasiController::class, 'prestasi'])->name('prestasi');
