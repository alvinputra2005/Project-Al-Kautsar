<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('alumni_sessions', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->unsignedBigInteger('alumni_id'); // Tipe data yang sesuai dengan id pada alumni
            $table->timestamps();

            // Menambahkan foreign key yang benar
            $table->foreign('alumni_id')->references('id')->on('alumni')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni_sessions');
    }
}