@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Negara
                </div>
                <div class="card-body">
                    <form action="{{route('negara.update',$negara->id)}}" method="post">
                     <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Negara</label>
                            <input type="text" name="kode_negara" value="{{$negara->kode_negara}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Negara</label>
                            <input type="text" name="nama_negara" value="{{$negara->nama_negara}}" class="form-control" required>
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