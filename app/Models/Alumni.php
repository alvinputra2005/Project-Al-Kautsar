<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'jenis_kelamin', 'kampus', 'angkatan', 'pekerjaan', 'bidang_keahlian', 'pengalaman', 'asal', 'contact', 'riwayat_pendidikan'
    ];
}