<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\SubRuangModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubRuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            SubRuangModel::create([
                'no_ruang' => 1 . $i + 1,
                'nama_sub_ruang' =>  'sub ruangan ' . $i + 1,
                'ruang_id' => rand(1, 10),
                'pabx' =>  'random ' . $i + 1,
                'kap' =>  rand(1, 1000),
                'kap_ujian' =>  rand(1, 300),
                'fas_ac' => rand(0, 1),
                'fas_komp' => rand(0, 1),
                'fas_lcd' => rand(0, 1),
                'fas_audio' => rand(0, 1),
                'fas_inet' => rand(0, 1),
                'ukuran_panjang' => rand(1, 200),
                'ukuran_luas' => rand(1, 200),
                'ukuran_tinggi' => rand(1, 200),
                'ukuran_lebar' => rand(1, 200),
                'link' => '#',
            ]);
        }
    }
}
