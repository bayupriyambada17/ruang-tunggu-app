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
        Schema::create('laporan_ruang', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sub_ruang_id")->constrained("sub_ruang")->cascadeOnDelete();
            $table->string('catatan_laporan');
            $table->string('type')->nullable();
            $table->foreignId("user_id")->nullable()->constrained("users")->cascadeOnDelete();
            $table->dateTime('tanggal_laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_ruang_models');
    }
};
