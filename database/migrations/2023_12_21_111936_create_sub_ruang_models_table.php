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
        Schema::create('sub_ruang', function (Blueprint $table) {
            $table->id();
            $table->string('no_ruang');
            $table->string('nama_sub_ruang');
            $table->foreignId('ruang_id')->constrained('ruang')->cascadeOnDelete();
            $table->string('pabx');
            $table->string('kap');
            $table->string('kap_ujian');
            $table->boolean('fas_ac');
            $table->boolean('fas_komp');
            $table->boolean('fas_lcd');
            $table->boolean('fas_audio');
            $table->boolean('fas_inet');
            $table->integer('ukuran_panjang')->nullable();
            $table->integer('ukuran_luas')->nullable();
            $table->integer('ukuran_tinggi')->nullable();
            $table->integer('ukuran_lebar')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_ruang_models');
    }
};
