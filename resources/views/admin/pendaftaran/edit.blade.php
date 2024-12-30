@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Edit Data Pendaftaran</h5>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <label for="">Nama Anak</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">medication</i>
                                    </span>
                                </span>
                                <input type="text" name="nama" class="form-control" id="form1-username"
                                    placeholder="Nama Anak" value="{{$data->nama}}" required>
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
                                            placeholder="Kota..." value="{{$data->tempat_lahir}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir"
                                        value="{{$data->tanggal_lahir}}" required>
                                </div>
                            </div>
                        </div>
                        <!-- Dropdown Ibu -->
                        <div class="form-group">
                            <label for="ibu_id">Orang Tua (Ibu)</label>  
                            <select class="form-control select2" name="ibu_id" id="ibu_id" value="{{$data->nama_orang_tua}}"required>
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
                                <input type="text" name="nama_ayah" class="form-control" value="{{ $data->nama_ayah }}" readonly>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="">Alamat</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">location_on</i>
                                    </span>
                                </span>
                                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $data->alamat }}" readonly>
                                </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="">Nomor Hp</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">phone</i>
                                    </span>
                                </span>
                                <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{ $data->nomor_telepon }}" readonly>
                                </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <a href="{{Route('admin.pendaftaran.index')}}" class="btn btn-secondary"><i
                                class="material-icons">keyboard_arrow_left</i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                            Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        // Pastikan jQuery sudah ter-load
        console.log("jQuery is ready");

        // Menambahkan fungsionalitas untuk dropdown ibu dan pengisian alamat otomatis
        $('#ibu_id').on('change', function() {
            var selectedOption = $(this).find('option:selected'); // Ambil opsi yang dipilih
            console.log(selectedOption); // Debug: Pastikan opsi yang dipilih sudah benar

            var alamat = selectedOption.data('alamat'); // Ambil alamat dari data atribut
            var namaSuami = selectedOption.data('nama-suami'); // Ambil nama suami dari data atribut
            var noHp = selectedOption.data('no-hp'); // Ambil nomor telepon dari data atribut

            // Debug: Pastikan data atribut terambil dengan benar
            console.log('Alamat:', alamat);
            console.log('Nama Suami:', namaSuami);
            console.log('Nomor HP:', noHp);

            // Isi kolom alamat dengan alamat yang dipilih
            $('#alamat').val(alamat);
            $('#nama_ayah').val(namaSuami);
            $('#nomor_telepon').val(noHp);
        });

    });
</script>
@endsection
