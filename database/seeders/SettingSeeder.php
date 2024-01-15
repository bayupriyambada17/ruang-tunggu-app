<?php

namespace Database\Seeders;

use App\Models\SettingModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SettingModel::create([
            'nama_aplikasi' => 'Sistem Informasi Pendidikan',
        ]);
    }
}
