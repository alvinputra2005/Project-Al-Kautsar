<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman home
    public function home()
    {
        return view('home'); // Akan load resources/views/home.blade.php
    }

    // Method untuk halaman testimoni
    public function testimoni()
    {
        return view('testimoni');
    }

    // Method untuk halaman data tendik
    public function tendik()
    {
        return view('tendik');
    }
}