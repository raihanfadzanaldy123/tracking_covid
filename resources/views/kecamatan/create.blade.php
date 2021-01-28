@extends('layouts.master')
@section('judul')
 Kecamatan
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kecamatan
                </div>
                <div class="card-body">
                    <form action="{{route('kecamatan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control @error('nama_kecamatan') is-invalid @enderror">
                            @error('nama_kecamatan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <select class="form-control" name="id_kota" id="">
                                @foreach($kota as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                                @endforeach
                            </select>
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