@extends('nav')

@section('isi')
<div class="container mt-5">
    <h2>Contact Details</h2>
    <div class="card mt-5">
        <div class="card-body">
            <p>Name: {{ $contact->name }}</p>
            <p>Age: {{ $contact->umur }}</p>
            <p>Comment: {{ $contact->alamat }}</p>
        </div>
    </div>
    <a href="{{ route('contacts.index') }}" class="btn btn-primary my-3"><strong>Back to Report</strong></a>
</div>
@endsection
