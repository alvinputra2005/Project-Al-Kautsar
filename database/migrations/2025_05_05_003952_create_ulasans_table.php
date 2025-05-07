<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasansTable extends Migration
{
    public function up()
    {
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('ulasan');
            $table->integer('rating');
            // Tidak perlu kolom 'user_id' atau foreign key ke 'users'
            $table->timestamps();

            $table->engine = 'InnoDB';  // Pastikan menggunakan InnoDB
        });
    }

    public function down()
    {
        Schema::dropIfExists('ulasan');
    }
}
