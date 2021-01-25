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
                    Edit Data Kasus
                </div>
                <div class="card-body">
                    <form action="{{route('kasus.update',$kasus->id)}}" method="post">
                     <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Rw</label>
                            <select class="form-control" name="id_rw" id="exampleFormControlSelect1">
                                @foreach($rw as $data)
                                    <option value="{{$data->id}}"
                                    @if($data->nama_rw == $kasus->rw->nama_rw)
                                        selected
                                    @endif
                                    >
                                    {{$data->nama_rw}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Positif</label>
                            <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Sembuh</label>
                            <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Meninggal</label>
                            <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="fas fa-arrow-alt-circle-left btn btn-outline-secondary"> Kembali</a>
                            <button type="submit" class="far fa-save btn btn-outline-primary"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection