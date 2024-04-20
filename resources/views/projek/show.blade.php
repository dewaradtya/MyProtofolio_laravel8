@extends('nav')

@section('isi')
<div class="container mt-5">
    <h2>projek Details</h2>
    <div class="card mt-5">
        <div class="card-body">
            <img src="{{ asset('img/projek/' . $projek->image) }}" alt="" style="width: 100px;">
            <p>Judul: {{ $projek->title }}</p>
            <p>Link: {{ $projek->link }}</p>
            <p>Slug: {{ $projek->slug }}</p>
            <p>Comment: {{ $projek->alamat }}</p>
            <p>Deskripsi: {{ $projek->content }}</p>
        </div>
    </div>
    <a href="{{ route('projek.index') }}" class="btn btn-primary my-3"><strong>Back to Report</strong></a>
</div>
@endsection
