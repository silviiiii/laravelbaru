@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Edit Data Hobi</b></center></div>
                <div class="card-body">
                    <form action="{{route('mahasiswa.update',$mhs->id)}}"method="POST" >
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="nama" value="{{$mhs->nama}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nim</label>
                            <input type="text" name="nim" value="{{$mhs->nim}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama dosen</label>
                            {{--<input type="text" name="id_dosen">--}}
                            <select name="id_dosen" class="form-control" required>
                                    @foreach ($dosen as $data)
                                    <option value="{{$data->id}}"{{$data->id == $mhs->id_dosen ? "selected":""}}>{{$data->nama}}</option>
                                        @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
