@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Detail Data Ibu</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td>ID ibu</td>
                            <td>: A - {{$data->ibu_id}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width:20%">Nama Ibu</td>
                            <td>: {{$data->nama_ibu}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{$data->alamat}}</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td>Nama Ayah</td>
                            <td>: {{$data->nama_suami}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td>: {{$data->no_hp}}</td>
                        </tr>
                       
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.ibu.index')}}" class="btn btn-secondary"><i
                            class="material-icons">keyboard_arrow_left</i> Kembali</a>
                   
                </div>
            </div>
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