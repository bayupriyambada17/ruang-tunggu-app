<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\RuangModel;
use Illuminate\Database\Seeder;
use Database\Seeders\RuangSeeder;
use Database\Seeders\SubRuangSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'operator',
            'email' => 'operator@example.com',
            'password' => Hash::make("password"), 'role' => "operator",
            'verifikasi_date' => now(),
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => 'peminjaman ' . ($i + 1),
                'email' => 'peminjaman' . ($i + 1) . '@gmail.com',
                'password' => Hash::make("password"), 'role' => "peminjam",
                'verifikasi_date' => now(),
            ]);
        }
        $this->call([
            RuangSeeder::class,
            SubRuangSeeder::class,
        ]);
    }
}
