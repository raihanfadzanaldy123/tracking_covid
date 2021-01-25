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
                    Menampilkan Data Kasus
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Positif</label>
                        <input type="text" name="positif" value="{{$kasusglobal->positif}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Sembuh</label>
                        <input type="text" name="sembuh" value="{{$kasusglobal->sembuh}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Meninggal</label>
                        <input type="text" name="meninggal" value="{{$kasusglobal->meninggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" value="{{$kasusglobal->tanggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Negara</label>
                        <input type="text" name="id_negara" value="{{$kasusglobal->negara->nama_negara}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="fas fa-arrow-alt-circle-left btn btn-outline-secondary"> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection