@extends('layouts.master')
@section('judul')
Provinsi
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Provinsi
                </div>
                <div class="card-body">
                    <form action="{{route('provinsi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="far fa-save btn btn-outline-primary"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection