@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><b>Data Dosen</b></center>
                        <a href="{{route('dosen.create')}}" class="float-right">
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Dosen</th>
                                        <th>nipd</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1;
                                    @endphp
                                    @foreach ($dosen as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nipd}}</td>
                                        <td>
                                                <form action="{{route('dosen.destroy',$data->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <a class=" btn btn-warning" href="{{route('dosen.edit',$data->id)}}">Edit</a>
                                                <a class=" btn btn-info" href="{{route('dosen.show',$data->id)}}">Show</a>
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
