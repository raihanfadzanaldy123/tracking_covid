@extends('layouts.master')
@section('judul')
 Kasus
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kasus
                </div>
                <div class="card-body">
                    <form action="{{route('kasusglobal.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Negara</label>
                            <select class="form-control" name="id_negara" id="">
                                @foreach($negara as $data)
                                    <option value="{{$data->id}}">{{$data->nama_negara}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Positif</label>
                            <input type="text" name="positif" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Sembuh</label>
                            <input type="text" name="sembuh" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Meninggal</label>
                            <input type="text" name="meninggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
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