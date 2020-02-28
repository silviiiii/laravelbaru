@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><b>Data Mahasiswa</b></center>
                        <a href="{{route('mahasiswa.create')}}" class="float-right">
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>nim</th>
                                        <th>nama dosen</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1;
                                    @endphp
                                    @foreach ($mhs as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nim}}</td>
                                        <td>{{$data->dosen->nama}}</td>
                                        <td>
                                                <form action="{{route('mahasiswa.destroy',$data->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <a class=" btn btn-warning" href="{{route('mahasiswa.edit',$data->id)}}">Edit</a>
                                                <a class=" btn btn-info" href="{{route('mahasiswa.show',$data->id)}}">Show</a>
                                                <button type="submit" class="btn btn-danger" onclick=" return confirm('apakah anda yakin?')">Delete</button>
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
