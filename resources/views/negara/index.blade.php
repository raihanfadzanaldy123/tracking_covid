@extends('layouts.master')
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
                    Data Negara
                    <a href="{{route('negara.create')}}" class="fas fa-plus-square btn btn-outline-dark float-right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Negara</th>
                                    <th>Negara</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($negara as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kode_negara}}</td>
                                    <td>{{$data->nama_negara}}</td>
                                    <td>
                                        <form action="{{route('negara.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('negara.show',$data->id)}}" class="fas fa-file-alt btn btn-outline-primary"> Lihat</a> |
                                            <a href="{{route('negara.edit',$data->id)}}" class="fas fa-edit btn btn-outline-success"> Edit</a> |
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
