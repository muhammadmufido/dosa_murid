<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            "kode_kelas" => "RPL123",
            "nama_kelas" => "XI RPL 1",
            "kode_jurusan" => "Rpl",
        ]);
        Kelas::create([
            "kode_kelas" => "RPL124",
            "nama_kelas" => "XI RPL 2",
            "kode_jurusan" => "Rpl",
        ]);
        Kelas::create([
            "kode_kelas" => "MPLB125",
            "nama_kelas" => "XI MPLB 1",
            "kode_jurusan" => "Mplb",
        ]);
    }
}
