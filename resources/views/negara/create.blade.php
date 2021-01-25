@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Negara
                </div>
                <div class="card-body">
                    <form action="{{route('negara.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Negara</label>
                            <input type="text" name="kode_negara" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Negara</label>
                            <input type="text" name="nama_negara" class="form-control" required>
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