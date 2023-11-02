<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            "kode_jurusan" => "Rpl",
            "nama_jurusan" => "Rekayasa Perangkat Lunak",
        ]);
        Jurusan::create([
            "kode_jurusan" => "Mplb",
            "nama_jurusan" => "Menejem Perkantoran Layanan Bisnis",
        ]);
        Jurusan::create([
            "kode_jurusan" => "Akl",
            "nama_jurusan" => "administrasi  dan keuangan  lembaga",
        ]);
        Jurusan::create([
            "kode_jurusan" => " To",
            "nama_jurusan" => "Teknik Otomotif"
        ]);
        Jurusan::create([
            "kode_jurusan" => "Pm",
            "nama_jurusan" => "Pemasaran"
        ]);
    }
}
