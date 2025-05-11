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
        Schema::create('program_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('akun_user_id');
            $table->unsignedBigInteger('home_program_id');
            $table->timestamps();

            // Definisikan foreign key secara eksplisit
            $table->foreign('akun_user_id')->references('id')->on('akun_user')->onDelete('cascade');
            $table->foreign('home_program_id')->references('id')->on('home_programs')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_user');
    }
};
