@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><center><b>Tambah Data Mahasiswa</b></center></div>
                <div class="card-body">
                    <form action="{{route("mahasiswa.store")}}"method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="">Nama mahasiswa</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nim</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama dosen</label>
                            <select name="id_dosen" class="form-control">
                        </div>
                        @foreach ($dosen as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                        @endforeach
                </select>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </select>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
