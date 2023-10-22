@extends('nav')

@section('judul', 'Hasil')

@section('isi')
<div class="alert alert-primary" role="alert">
    Hasil <br>
    nama : {{$data['name']}} <br>
    umur : {{$data['umur']}} <br>
    alamat : {{$data['alamat']}} <br>
</div>

@endsection