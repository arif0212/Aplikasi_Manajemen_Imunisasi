@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Edit Data Bidan</h5>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <label for="">NIP Bidan</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">account_circle</i>
                                    </span>
                                </span>
                                <input type="text" name="nip" value="{{$user->bidan->nip}}" class="form-control"
                                    id="form1-username" placeholder="NIP Bidan" required>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">Nama</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person</i>
                                    </span>
                                </span>
                                <input type="text" name="nama" value="{{$user->bidan->nama}}" class="form-control"
                                    id="form1-username" placeholder="Nama Pegawai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" class="form-control">{!!$user->bidan->alamat!!}</textarea>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">No Hp</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">phone</i>
                                    </span>
                                </span>
                                <input type="text" name="no_hp" value="{{$user->bidan->no_hp}}" class="form-control"
                                    id="form1-username" maxlength="14" required>
                            </div>
                        </div>
                        <hr>
                        <div class="input-group mb-3">
                            <label for="">Username</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person</i>
                                    </span>
                                </span>
                                <input type="text" name="username" value="{{$user->username}}" class="form-control"
                                    id="form1-username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">Password</label>
                            <div class="input-group input-group-seamless mb-2">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">password</i>
                                    </span>
                                </span>
                                <input type="text" class="form-control" name="password" id="form1-username"
                                    placeholder="Password">
                            </div>
                            <small class="text-danger">isi jika ingin merubah password</small>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('admin.bidan.index')}}" class="btn btn-secondary"><i
                                    class="material-icons">keyboard_arrow_left</i> Batal</a>
                            <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                                Data</button>
                        </div>
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
