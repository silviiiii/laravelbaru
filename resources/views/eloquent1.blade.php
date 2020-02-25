@extends('layouts.nav')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
</head>
<body>
        @extends('layouts.template')

        @section('konten')
    <h1>{{$mahasiswa->nama}}</h1>
</body>
</html>
