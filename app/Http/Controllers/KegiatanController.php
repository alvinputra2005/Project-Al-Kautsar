<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('kegiatan');  // Mengarahkan ke view 'resources/views/kegiatan.blade.php'
    }
}
