<?php

namespace Database\Seeders;

use App\Models\Pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggaran::create([
            'kode_pelanggaran' => 'PL001',
            'nama_pelanggaran' => 'Terlambat',
            'poin' => '5',
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PL002',
            'nama_pelanggaran' => 'Bolos',
            'poin' => '20',
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PL003',
            'nama_pelanggaran' => 'Rambut Panjang',
            'poin' => '10',
        ]);
    }
}
