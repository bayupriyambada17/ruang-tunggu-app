<?php

namespace Database\Seeders;

use App\Models\RuangModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            RuangModel::create([
                'nama_ruangan' => 'Ruang ' . $i + 1
            ]);
        }
    }
}
