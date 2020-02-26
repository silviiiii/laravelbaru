@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tampilan Data Dosen</b></center></div>
                <div class="card-body">

                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="nama" value="{{$dosen->nama}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor induk pegawai dosen</label>
                            <input type="text" name="nipd" value="{{$dosen->nipd}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">kembalii</a>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
