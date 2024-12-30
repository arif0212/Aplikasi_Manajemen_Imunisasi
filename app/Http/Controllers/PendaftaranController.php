<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Ibu;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
  

    public function index()
    {
        $daftarIbu = Ibu::all();


        $data = Pendaftaran::orderByDesc('pendaftaran_id')->get();

        return view('admin.pendaftaran.index', compact('data', 'daftarIbu'));
    }

    public function verif($id)
{
    // Ambil data pendaftaran berdasarkan id
    $data = Pendaftaran::wherePendaftaranId($id)->first();

    // Tandai status pendaftaran sebagai sudah diverifikasi
    $data->status = 1;
    $data->update();

    // Cari ibu berdasarkan nama orang tua yang ada di pendaftaran
    $ibu = Ibu::where('nama_ibu', $data->nama_orang_tua)->first();

    // Jika ibu ditemukan, simpan ibu_id dan nama ibu pada data anak
    $anak = new Anak;
    $anak->nama_anak = $data->nama;
    $anak->tempat_lahir = $data->tempat_lahir;
    $anak->tanggal_lahir = $data->tanggal_lahir;

    // Jika ibu ditemukan, set ibu_id_anak dengan ibu_id
    if ($ibu) {
        $anak->ibu_id_anak = $ibu->ibu_id; // Set ibu_id yang diambil dari tabel Ibu
    } else {
        // Jika ibu tidak ditemukan, set ibu_id_anak menjadi null
        $anak->ibu_id_anak = null;
    }

    // Simpan data anak
    $anak->nama_ayah = $data->nama_ayah;
    $anak->jk = $data->jk;
    $anak->alamat = $data->alamat;
    $anak->save();

    // Kembali ke halaman sebelumnya dengan pesan sukses
    return back()->withToastSuccess('Data berhasil diverifikasi');
}

    public function edit($id)
    {
        $data = Pendaftaran::findOrFail($id);
        $daftarIbu = Ibu::all();


        return view('admin.pendaftaran.edit', compact('data','daftarIbu'));
    }

    public function update($id, Request $req)
    {
        $data = Pendaftaran::findOrFail($id);
    
        // Ambil ibu_id dan nama_suami untuk diupdate
        $ibu = Ibu::find($req->ibu_id);
        
       
    
        // Update data pendaftaran
        $data->update([
            'nama_orang_tua' => $req->ibu_id,  // Update ibu_id sesuai dengan input dari form
            'alamat' => $req->alamat,  // Update alamat sesuai dengan input dari form
            'nama_ayah' => $req->nama_ayah,  // Simpan nama_ayah yang diambil dari ibu
            'nomor_telepon' => $req->nama_ayah,  // Simpan nama_ayah yang diambil dari ibu

        ]);
    
        return redirect()->route('admin.pendaftaran.index')->withToastSuccess('Data berhasil diubah');
    }
    





    public function show($id)
    {
        $data = Pendaftaran::findOrFail($id);

        return view('admin.pendaftaran.show', compact('data'));
    }

    public function anak()
    {

        return view('admin.pendaftaran.anak');
    }

    public function store(Request $req)
    {
        // Ambil ibu_id dari input form
        $ibu = Ibu::find($req->ibu_id);
    
        // Jika ibu ditemukan, set nama_orang_tua
        $data = $req->all();
        if ($ibu) {
            $data['nama_orang_tua'] = $ibu->nama_ibu;
            $data['nama_ayah'] = $ibu->nama_suami; // Menambahkan nama suami sebagai nama ayah

        }
    
        // Simpan data pendaftaran
        Pendaftaran::create($data);
    
        return back()->withToastSuccess('Pendaftaran berhasil');
    }
    

    public function storePendaftaran(Request $req)
    {
        Pendaftaran::create($req->all());


        return redirect()->route('welcome')->withToastSuccess('Pendaftaran berhasil');
    }

    public function destroy($od)
    {
        Pendaftaran::findOrFail($id)->delete();

        return back()->withSuccess('Data berhasil dihapus');

    }
}
