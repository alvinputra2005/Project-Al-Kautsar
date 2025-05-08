<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('alumni_sessions', function (Blueprint $table) {
            $table->id(); // ID untuk session
            $table->unsignedBigInteger('alumni_id'); // Menghubungkan ke id alumni
            $table->timestamps(); // Timestamps untuk created_at dan updated_at

            // Menambahkan foreign key yang mengarah ke tabel alumnis
            $table->foreign('alumni_id')->references('id')->on('alumnis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni_sessions');
    }
}