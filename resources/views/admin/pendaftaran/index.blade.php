@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <div class="col-md">
                            <h5>Data Pendaftaran</h5>
                        </div>
                        <div class="col-md text-right">
                            <a class="btn btn-primary" href="{{Route('admin.laporan.pendaftaran')}}" target="_blank"><i class="material-icons">print</i> Cetak Data</a>
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
                                <th>Nama Anak</th>
                                <th>Nama Orang Tua</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>No. Hp</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->nama_orang_tua}}</td>
                                <td>{{$d->tempat_lahir}},
                                    {{carbon\carbon::parse($d->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->nomor_telepon}}</td>
                                <td>
                                    @switch($d->status)
                                    @case(0)
                                    <span class="badge badge-info">belum diverifikasi</span>

                                    @break
                                    @case(1)
                                    <span class="badge badge-primary">terverifikasi</span>

                                    @break
                                    @default

                                    @endswitch
                                </td>
                                <td class="text-center">
                                    @if($d->status == 0)
                                    <a class="btn btn-rounded btn-success"
                                        href="{{Route('admin.pendaftaran.verif',['uuid'=> $d->pendaftaran_id])}}"><i
                                            class="material-icons">check_circle</i></a>
                                    <a class="btn btn-rounded btn-primary"
                                        href="{{Route('admin.pendaftaran.edit',['uuid'=> $d->pendaftaran_id])}}"><i
                                            class="material-icons">edit</i></a>
                                    <a class="btn btn-secondary" href="#"><i class="material-icons">delete</i></a>
                                    @endif
                                    <a class="btn btn-rounded btn-success"
                                        href="{{Route('admin.pendaftaran.show',['uuid'=> $d->pendaftaran_id])}}"><i
                                            class="material-icons">info</i></a>
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
            <div class="modal-body">
                <form action="{{Route('admin.pendaftaran.store')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <label for="">Nama Anak</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">medication</i>
                                </span>
                            </span>
                            <input type="text" name="nama" class="form-control" id="form1-username"
                                placeholder="Nama Anak" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="input-group mb-3">
                                <label for="">Tempat lahir</label>
                                <div class="input-group input-group-seamless">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">location_on</i>
                                        </span>
                                    </span>
                                    <input type="text" name="tempat_lahir" class="form-control" id="form1-username"
                                        placeholder="Kota..." required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir" required>
                            </div>
                        </div>
                    </div>
                       <!-- Dropdown Ibu -->
                       <div class="form-group">
                            <label for="ibu_id">Orang Tua (Ibu)</label>
                            <select class="form-control select2" name="ibu_id" id="ibu_id" required>
                                <option value="" disabled selected>Pilih Nama Ibu</option>
                                @foreach($daftarIbu as $ibu)
                                <option value="{{ $ibu->ibu_id }}"
                                    data-alamat="{{ $ibu->alamat }}"
                                    data-nama-suami="{{ $ibu->nama_suami }}"
                                    data-no-hp="{{ $ibu->no_hp }}">

                                    {{ $ibu->nama_ibu }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    <div class="input-group mb-3">
                        <label for="">Nama Ayah</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">medication</i>
                                </span>
                            </span>
                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-inline">
                            <div class="custom-control custom-radio mb-1 mr-3">
                                <input type="radio" id="formsRadioLaki" name="jk" value="Laki-laki" class="custom-control-input" checked>
                                <label class="custom-control-label" for="formsRadioLaki">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="formsRadioPerempuan" name="jk" value="Perempuan" class="custom-control-input">
                                <label class="custom-control-label" for="formsRadioPerempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>

         
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Nomor Hp</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">phone</i>
                                </span>
                            </span>
                            <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon"
                                maxlength="14" readonly>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i>
                    Batal</button>
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
        // Pastikan nilai default sudah terisi jika ada ibu_id yang sudah terpilih
        var selectedOption = $('#ibu_id').find('option:selected');
        var alamat = selectedOption.data('alamat');
        var namaSuami = selectedOption.data('nama-suami');
        var noHp = selectedOption.data('no-hp');

        // Isi input dengan nilai default
        $('#alamat').val(alamat);
        $('#nama_ayah').val(namaSuami);
        $('#nomor_telepon').val(noHp);

        // Menambahkan fungsionalitas untuk dropdown ibu dan pengisian alamat otomatis
        $('#ibu_id').on('change', function() {
            var selectedOption = $(this).find('option:selected');
            var alamat = selectedOption.data('alamat');
            var namaSuami = selectedOption.data('nama-suami');
            var noHp = selectedOption.data('no-hp');

            // Isi kolom alamat dengan alamat yang dipilih
            $('#alamat').val(alamat);
            $('#nama_ayah').val(namaSuami);
            $('#nomor_telepon').val(noHp);
        });
    });
</script>
@endsection
