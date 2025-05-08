<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id(); // ID alumni
            $table->string('nama'); // Nama alumni
            $table->string('jenis_kelamin'); // Jenis kelamin alumni
            $table->string('kampus'); // Kampus alumni
            $table->year('angkatan'); // Angkatan alumni
            $table->string('pekerjaan')->nullable(); // Pekerjaan alumni (nullable)
            $table->string('bidang_keahlian')->nullable(); // Bidang keahlian alumni (nullable)
            $table->text('pengalaman')->nullable(); // Pengalaman alumni (nullable)
            $table->string('asal')->nullable(); // Asal alumni (nullable)
            $table->string('contact')->nullable(); // Kontak alumni (nullable)
            $table->text('riwayat_pendidikan')->nullable(); // Riwayat pendidikan alumni (nullable)
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}