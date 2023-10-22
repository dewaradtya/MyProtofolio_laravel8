@extends('nav')

@section('judul', 'Hasil')

@section('isi')
<div class="alert alert-primary" role="alert">
    Hasil <br>
    Name : {{$data['name']}} <br>
    Age : {{$data['umur']}} <br>
    Comment : {{$data['alamat']}} <br>
</div>

<button type="button" class="btn btn-primary m-2 text-white"><a class="text-white" style="text-decoration: none;" href="{{ route('contact') }}">Back</a></button>
@endsection