@extends('nav')

@section('judul', 'Hasil')

@section('isi')
<div class="container mt-5 alert alert-primary" role="alert">
    <h2>Hasil</h2>
    <div class="card mt-5">
        <div class="card-body">   
        <P>Name : {{$data['name']}}</P>
        <P>Age : {{$data['umur']}}</P> 
        <P>Comment : {{$data['alamat']}}</P> 
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary text-white m-5"><a class="text-white" style="text-decoration: none;" href="{{ route('contact') }}">Back</a></button>
@endsection