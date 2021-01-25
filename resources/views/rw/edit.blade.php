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
                    Edit Data Rw
                </div>
                <div class="card-body">
                    <form action="{{route('rw.update',$rw->id)}}" method="post">
                     <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Rw</label>
                            <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kelurahan</label>
                            <select class="form-control" name="id_kelurahan" id="exampleFormControlSelect1">
                                @foreach($kelurahan as $data)
                                    <option value="{{$data->id}}"
                                    @if($data->nama_kelurahan == $rw->kelurahan->nama_kelurahan)
                                        selected
                                    @endif
                                    >
                                    {{$data->nama_kelurahan}}
                                    </option>
                                @endforeach
                            </select>
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