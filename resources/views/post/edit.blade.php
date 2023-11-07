@extends('nav')

@section('isi')
<div class="container mt-5">
    <h2>Edit Contact</h2>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $contact->name }}">
        </div>
        <div class="form-group">
            <label for="umur">Age:</label>
            <input type="text" class="form-control" name="umur" id="umur" value="{{ $contact->umur }}">
        </div>
        <div class="form-group">
            <label for="alamat">Comment:</label>
            <textarea class="form-control" name="alamat" id="alamat">{{ $contact->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary m-2">Update</button>
    </form>
</div>
@endsection
