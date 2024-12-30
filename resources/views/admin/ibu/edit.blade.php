@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Edit Data Ibu</h5>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <!-- Input Nama Ibu -->
                        <div class="input-group mb-3">
                            <label for="">Nama Ibu</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person</i>
                                    </span>
                                </span>
                                <input type="text" name="nama_ibu" class="form-control" id="form1-username"
                                    placeholder="Nama Ibu" value="{{$data->nama_ibu}}" required>
                            </div>
                        </div>

                        <!-- Input Alamat -->
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" 
                                      id="" 
                                      class="form-control" 
                                      required>{{$data->alamat}}</textarea>
                        </div>

                        <!-- Input Nama Ayah -->
                        <div class="input-group mb-3">
                            <label for="">Nama Ayah</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person</i>
                                    </span>
                                </span>
                                <input type="text" 
                                       name="nama_suami" 
                                       value="{{$data->nama_suami}}" 
                                       class="form-control" 
                                       id="form1-username" 
                                       placeholder="Nama Ayah" 
                                       required>
                            </div>
                        </div>

                        <!-- Input No HP -->
                        <div class="input-group mb-3">
                            <label for="">No HP</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">phone</i>
                                    </span>
                                </span>
                                <input type="text" 
                                       name="no_hp" 
                                       value="{{$data->no_hp}}" 
                                       class="form-control" 
                                       id="form1-username" 
                                       maxlength="14" 
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="card-footer text-right">
                        <a href="{{Route('admin.anak.index')}}" class="btn btn-secondary">
                            <i class="material-icons">keyboard_arrow_left</i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="material-icons">save</i> Simpan Data
                        </button>
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
        $('#example').DataTable();
    });
</script>
@endsection
