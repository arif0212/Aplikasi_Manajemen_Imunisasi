@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Data Vaksin</h5>
                        </div>
                        <div class="col-md text-right">
                            <a class="btn btn-primary" href="{{Route('admin.laporan.vaksin')}}" target="_blank"><i
                                    class="material-icons">print</i> Cetak Data</a>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target=".bd-example-modal-lg">+ Tambah Data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Vaksin</th>
                                <th>Keterangan</th>
                                <th>Pemberian Imunisasi</th>
                                {{-- <th>Waktu Imunisasi</th> --}}
                                <th>Kategori Umur</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nama_vaksin}}</td>
                                <td>{{$d->keterangan}}</td>
                                <td>{{$d->p_imunisasi}}</td>
                                {{-- <td>{{$d->waktu_pemberian}}</td> --}}
                                <td>{{$d->k_umur}}</td>
                                <td class="text-center">
                                    <a class="btn btn-rounded btn-primary"
                                        href="{{Route('admin.vaksin.edit',['uuid'=> $d->vaksin_id])}}"><i
                                            class="material-icons">edit</i></a>
                                    <a href="{{Route('admin.vaksin.destroy',['uuid'=>$d->vaksin_id])}}"
                                        class="btn btn-secondary"
                                        onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i
                                            class="material-icons">delete</i></a>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('admin.vaksin.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="">Nama Vaksin</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">medication</i>
                                </span>
                            </span>
                            <input type="text" name="nama_vaksin" class="form-control" id="form1-username"
                                placeholder="Nama Vaksin" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Keteragan</label>
                        <textarea name="keterangan" id="" class="form-control" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Tahun Pembuatan</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">insert_drive_file</i>
                                </span>
                            </span>
                            <input type="text" name="p_imunisasi" class="form-control" id="form1-username"
                                placeholder=". . . " required>
                        </div>
                    </div>
                    {{-- <div class="input-group mb-3">
                        <label for="">Waktu Pemberian</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">location_on</i>
                                </span>
                            </span>
                            <input type="date" name="waktu_pemberian" class="form-control" id="form1-username" required>
                        </div>
                    </div> --}}
                    <div class="input-group mb-3">
    <label for="k_umur">Kategori Umur</label>
    <div class="input-group input-group-seamless">
        <span class="input-group-prepend">
            <span class="input-group-text">
                <i class="material-icons">child_care</i>
            </span>
        </span>
        <select name="k_umur" class="form-control" id="form1-username" required>
            <option value="" disabled selected>Pilih Kategori Umur</option>
            <option value="1-Bulan">1 Bulan</option>
            <option value="2-Bulan">2 Bulan</option>
            <option value="3-Bulan">3 Bulan</option>
            <option value="4-Bulan">4 Bulan</option>
            <option value="5-Bulan">5 Bulan</option>
            <option value="6-Bulan">6 Bulan</option>
            <option value="7-Bulan">7 Bulan</option>
            <option value="8-Bulan">8 Bulan</option>
            <option value="9-Bulan">9 Bulan</option>
            <option value="10-Bulan">10 Bulan</option>
            <option value="11-Bulan">11 Bulan</option>

            <!-- Tambahkan pilihan lainnya sesuai kebutuhan -->
        </select>
    </div>
</div>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="material-icons">close</i>
                        Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                        Data</button>
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
        } );
</script>
@endsection