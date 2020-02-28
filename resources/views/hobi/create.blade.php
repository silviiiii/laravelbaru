@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Data Hobi</b></center></div>
                <div class="card-body">
                    <form action="{{route("hobi.store")}}"method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Hobi</label>
                            <input type="text" name="hobi" class="form-control" required>
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
