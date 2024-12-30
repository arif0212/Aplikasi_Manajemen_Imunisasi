<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\JadwalImunisasi;
use App\Models\Kms;
use Illuminate\Http\Request;

class KmsController extends Controller
{
    public function index($uuid)
    {
        $anak = Anak::findOrFail($uuid);
        // Ambil tanggal lahir dan hitung umur dalam minggu
    $tanggalLahir = $anak->tanggal_lahir;
    $tanggalLahirDate = new \DateTime($tanggalLahir);
    $tanggalSekarang = new \DateTime();
    $selisihHari = $tanggalLahirDate->diff($tanggalSekarang)->days;
    $umurDalamMinggu = floor($selisihHari / 7);

        $imunisasi = JadwalImunisasi::latest()->get();

        $kms = Kms::whereAnakId($anak->anak_id)->latest()->get();

        return view('admin.kms.index', compact('anak', 'kms', 'imunisasi', 'umurDalamMinggu'));
    }

    public function store(Request $req)
    {
        Kms::create($req->all());

        return back()->withToastSuccess('Data berhasil disimpan');
    }

    public function edit()
    {

        return view('admin.kms.edit');
    }

    public function destroy($id)
    {
        $data = Kms::findOrFail($id)->delete();

        return back()->withToastSuccess('Data berhasil dihapus');
    }
}
