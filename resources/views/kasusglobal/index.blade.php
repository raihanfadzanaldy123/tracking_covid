@extends('layouts.master')
@section('judul')
 Kasus
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
                    Data Kasus
                    <a href="{{route('kasusglobal.create')}}" class="fas fa-plus-square btn btn-outline-dark float-right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                    <th>Tanggal</th>
                                    <th>Negara</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasusglobal as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->positif}}</td>
                                    <td>{{$data->sembuh}}</td>
                                    <td>{{$data->meninggal}}</td>
                                    <td>{{date('d-m-Y', strtotime($data->tanggal))}}</td>
                                    <td>{{$data->negara->nama_negara}}</td>
                                    <td>
                                        <form action="{{route('kasusglobal.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kasusglobal.show',$data->id)}}" class="fas fa-file-alt btn btn-outline-primary"> Lihat</a> |
                                            <a href="{{route('kasusglobal.edit',$data->id)}}" class="fas fa-edit btn btn-outline-success"> Edit</a> |
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
