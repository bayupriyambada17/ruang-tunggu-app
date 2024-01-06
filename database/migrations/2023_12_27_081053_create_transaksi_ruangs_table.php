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
        Schema::create('transaksi_ruang', function (Blueprint $table) {
            $table->id();
            $table->string("transaksi_kode")->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('sub_ruang_id')->constrained('sub_ruang')->cascadeOnDelete();
            $table->time("start_time")->nullable();
            $table->time("end_time")->nullable();
            $table->string("deskripsi_ruang")->nullable();
            $table->dateTime('tanggal_transaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_ruangs');
    }
};
