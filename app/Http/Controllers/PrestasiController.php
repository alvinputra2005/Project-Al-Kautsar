<?php
// app/Http/Controllers/PrestasiController.php

// app/Http/Controllers/PrestasiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function prestasi()  // Ubah nama method menjadi 'prestasi'
    {
        return view('prestasi');  // Mengarahkan ke view 'resources/views/prestasi.blade.php'
    }
}
