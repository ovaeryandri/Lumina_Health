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
    Schema::create('home_workshops', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('deskripsi');
        $table->string('lokasi');
        $table->dateTime('waktu_mulai');
        $table->dateTime('waktu_selesai');
        $table->unsignedInteger('maks_kapasitas');
        $table->string('gambar');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_workshops');
    }
};
