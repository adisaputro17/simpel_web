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
        Schema::create('izin_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->foreign('nip')->references('nip')->on('pegawais')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('bulan');
            $table->string('tahun');
            $table->time('jam_keluar');
            $table->time('jam_kembali');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_keluars');
    }
};
