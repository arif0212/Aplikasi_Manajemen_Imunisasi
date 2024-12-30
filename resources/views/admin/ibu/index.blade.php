@extends('layouts.main')

@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Data Ibu</h5>
                        </div>
                        <div class="col-md text-right">
                            <a class="btn btn-primary" href="{{ Route('admin.laporan.ibu') }}" target="_blank">
                                <i class="material-icons">print</i> Cetak Data
                            </a>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
                                + Tambah Data
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Ibu</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Nama Suami</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>A - {{$d->ibu_id}}</td>
                                <td>{{$d->nama_ibu}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->no_hp}}</td>
                                <td>{{$d->nama_suami}}</td>
                                <td class="text-center">
                                    <a class="btn btn-rounded btn-success" href="{{ Route('admin.ibu.show', ['uuid' => $d->ibu_id]) }}">
                                        <i class="material-icons">info</i>
                                    </a>
                                    <a class="btn btn-rounded btn-primary" href="{{ Route('admin.ibu.edit', ['uuid' => $d->ibu_id]) }}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="{{ Route('admin.ibu.destroy', ['uuid' => $d->ibu_id]) }}" class="btn btn-rounded btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data Ibu -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ibu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ Route('admin.ibu.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Nama Ibu -->
                    <div class="input-group mb-3">
                        <label for="nama">Nama Ibu</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </span>
                            <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" required></textarea>
                    </div>

                    <!-- No HP -->
                    <div class="input-group mb-3">
                        <label for="no_hp">No HP</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">phone</i>
                                </span>
                            </span>
                            <input type="text" name="no_hp" class="form-control" maxlength="14" placeholder="No HP" required>
                        </div>
                    </div>

                    <!-- Nama Suami -->
                    <div class="input-group mb-3">
                        <label for="nama_suami">Nama Suami</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </span>
                            <input type="text" name="nama_suami" class="form-control" placeholder="Nama Suami" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i> Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection
