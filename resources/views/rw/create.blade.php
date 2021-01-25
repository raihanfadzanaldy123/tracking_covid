@extends('layouts.master')
@section('judul')
 Rw
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Rw
                </div>
                <div class="card-body">
                    <form action="{{route('rw.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Rw</label>
                            <input type="text" name="nama_rw" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <select class="form-control" name="id_kelurahan" id="">
                                @foreach($kelurahan as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
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