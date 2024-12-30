<?php

namespace App\Http\Controllers;
use App\Models\Anak;
use App\Models\Ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function index()
    {
        $data = Ibu::all();
        return view('admin.ibu.index', compact('data'));
    }

    public function store(Request $req)
    {
        $data = Ibu::create($req->all());

        return back()->withToastSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Ibu::findOrFail($uuid);

        return view('admin.ibu.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Ibu::findOrFail($uuid);

        return view('admin.ibu.edit', compact('data'));
    }

    public function update($uuid, Request $req)
    {
        $data = Ibu::findOrFail($uuid);

        $data->fill($req->all())->save();

        return redirect()->route('admin.ibu.index')->withToastSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Ibu::findOrFail($uuid)->delete();

        return back()->withToastSuccess('Data berhasil dihapus');
    }
}
