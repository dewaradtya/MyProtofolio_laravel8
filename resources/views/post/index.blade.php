@extends('nav')


@section('isi')
<div class="container mt-5" data-aos="fade-up" data-aos-duration="2000">
    <div class="row text-center mb-4">
      <div class="col">
        <h2>Contact List</h2>
      </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Comment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->umur }}</td>
                <td>{{ $contact->alamat }}</td>
                <td>
                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info m-1">View</a>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary m-1">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection