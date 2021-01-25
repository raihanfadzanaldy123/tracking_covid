@extends('layouts.master')
@section('judul')
 Kecamatan
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Data Kecamatan
                    <a href="{{route('kecamatan.create')}}" class="fas fa-plus-square btn btn-outline-dark float-right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Kecamatan</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten / Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kecamatan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kode_kecamatan}}</td>
                                    <td>{{$data->nama_kecamatan}}</td>
                                    <td>{{$data->kota->nama_kota}}</td>
                                    <td>
                                        <form action="{{route('kecamatan.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kecamatan.show',$data->id)}}" class="fas fa-file-alt btn btn-outline-primary"> Lihat</a> |
                                            <a href="{{route('kecamatan.edit',$data->id)}}" class="fas fa-edit btn btn-outline-success"> Edit</a> |
                                            <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="fas fa-trash-alt btn btn-outline-danger"> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
