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
        Schema::create('laporan_penempatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lamaran_id')->constrained('lamarans')->onDelete('cascade');
            $table->date('tgl_mulai_kerja');
            $table->enum('status', ['aktif', 'resign', 'selesai_kontrak'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_penempatans');
    }
};
