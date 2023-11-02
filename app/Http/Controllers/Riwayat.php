<?php

namespace App\Http\Controllers;

use App\Models\Aksi;
use App\Models\GuruBK;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class Riwayat extends Controller
{
    public function index()
    {
        return view('riwayat');
    }
    public function riwayat(Request $request)
    {
        $nis = $request->nis;
        $siswa = Siswa::where('nis',$nis)->with('kelas.jurusan')->first();
        $guruBK = GuruBK::all();
        return view('riwayat' , compact('nis','siswa','guruBK'));
        $pelanggaranAll = Pelanggaran::all(); 
        return view('pelanggaran', compact('aksi' , 'siswa' , 'kode_aksi', 'pelanggaranAll'));
    }
}
