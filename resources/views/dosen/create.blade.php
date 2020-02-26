@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Data Dosen</b></center></div>
                <div class="card-body">
                    <form action="{{route("dosen.store")}}"method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor induk pegawai dosen</label>
                            <input type="text" name="nipd" class="form-control" required>
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
