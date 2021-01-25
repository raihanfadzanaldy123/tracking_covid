@extends('layouts.master')
@section('judul')
 Kelurahan / Desa
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kelurahan / Desa
                </div>
                <div class="card-body">
                    <form action="{{route('kelurahan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kelurahan / Desa</label>
                            <input type="text" name="nama_kelurahan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select class="form-control" name="id_kecamatan" id="">
                                @foreach($kecamatan as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
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