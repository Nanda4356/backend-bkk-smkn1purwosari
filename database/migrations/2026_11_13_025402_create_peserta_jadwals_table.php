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
        Schema::create('peserta_jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_id')->constrained('jadwal_rekruts')->onDelete('cascade');
            $table->foreignId('lamaran_id')->constrained('lamarans')->onDelete('cascade');
            $table->enum('hasil', ['lulus', 'tidak lulus', 'menunggu'])->default('menunggu');
            $table->string('catatan', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_jadwals');
    }
};
