<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Ibu;

use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {     
        $dataAnak = Anak::with('ibu')->get();

        $data = Anak::all();
        // die($data);
        return view('admin.anak.index1', compact('data', 'dataAnak'));
    }

    public function store(Request $req)
    {
        $data = Anak::create($req->all());

        return back()->withToastSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Anak::findOrFail($uuid);

        return view('admin.anak.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Anak::findOrFail($uuid);

        return view('admin.anak.edit', compact('data'));
    }

    public function update($uuid, Request $req)
    {
        $data = Anak::findOrFail($uuid);

        $data->fill($req->all())->save();

        return redirect()->route('admin.anak.index')->withToastSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Anak::findOrFail($uuid)->delete();

        return back()->withToastSuccess('Data berhasil dihapus');
    }
}
