<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class DashboardController extends Controller
{
    public function index() {
        $pegawaiAsc = Pegawai::orderBy('tahun_masuk')->first();
        $pegawaiDesc = Pegawai::orderBy('tahun_masuk', 'desc')->first();

        $jumlahPegawai = [];
        $tahunMasuk = [];
        for ($i=$pegawaiAsc->tahun_masuk; $i <= $pegawaiDesc->tahun_masuk; $i++) { 
            array_push($jumlahPegawai, count(Pegawai::where('tahun_masuk', $i)->get()));
            array_push($tahunMasuk, $i);
        }

        $data['jumlah_pegawai'] = json_encode($jumlahPegawai);
        $data['tahun_masuk'] = json_encode($tahunMasuk);


        return view('admin.dashboard', $data);
    }
}