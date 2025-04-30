<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');  // pastikan ini sesuai dengan nama file Blade yang kamu buat
});
