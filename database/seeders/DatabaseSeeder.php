<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ListPelanggaran;
use App\Models\Siswa;
use App\Models\Aksi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            KelasSeeder::class,
            GuruBKSeeder::class,
            PelanggaranSeeder::class,
        ]);

        Siswa::Factory(100)->create();
        Aksi::Factory(30)->create();
        ListPelanggaran::Factory(95)->create();
    }
}
