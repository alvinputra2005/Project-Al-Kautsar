<?php

namespace App\Http\Controllers;

use App\Models\Ulasan; // pastikan model Ulasan diimport

class PageController extends Controller
{
    public function home()
    {
        // Ambil ulasan yang sudah ada (bisa dibatasi jumlahnya)
        $ulasan = Ulasan::take(3)->get();  // Menampilkan 3 ulasan terbaru, atau sesuaikan dengan kebutuhan

        // Kirim data ulasan ke view home
        return view('home', compact('ulasan'));
    }
}