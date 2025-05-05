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
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('akun_user_id');
            $table->unsignedBigInteger('about_staffs_id');
            $table->string('status')->default('aktif');
            $table->timestamps();

            $table->foreign('about_staffs_id')->references('id')->on('about_staffs')->onDelete('cascade');
            $table->foreign('akun_user_id')->references('id')->on('akun_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasis');
    }
};
