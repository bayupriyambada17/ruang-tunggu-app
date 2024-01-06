<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\TransaksiRuang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiRuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 0; $i < 10; $i++) {
        //     TransaksiRuang::create([
        //         'transaksi_kode' => 'tr-' . Str::random(10) . ($i + 1),
        //         'ruang_id' => rand(1, 10),
        //         'user_id' => 1,
        //         'tanggal_transaksi' => now()
        //     ]);
        // }
    }
}
