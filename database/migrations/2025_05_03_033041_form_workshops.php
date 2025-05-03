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
        Schema::create('form_workshop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_akun_user')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_home_workshops')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('tujuan');
            $table->timestamps();
            $table->foreign('id_akun_user')->references('id')->on('akun_user')->onDelete('cascade');
            $table->foreign('id_home_workshops')->references('id')->on('home_workshops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
