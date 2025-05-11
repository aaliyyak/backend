<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('gambar'); // Menyimpan nama file gambar
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->decimal('latitude', 10, 7)->nullable();  // Titik koordinat latitude
            $table->decimal('longitude', 10, 7)->nullable(); // Titik koordinat longitude
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
