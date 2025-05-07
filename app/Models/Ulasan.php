<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan'; // Nama tabel di database
    protected $fillable = ['nama', 'ulasan', 'rating', 'user_id']; // Kolom yang dapat diisi

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
