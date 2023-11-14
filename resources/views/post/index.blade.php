@extends('nav')


@section('isi')
<div class="container mt-5">
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
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Comment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->umur }}</td>
                <td>{{ $contact->alamat }}</td> 
                <td>
                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info m-1"><strong>View</strong></a>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning m-1"><strong>Edit</strong></a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-1"><strong>Delete</strong></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <center><button type="button" class="btn btn-primary m-5"><a class="text-white" style="text-decoration: none;" href="{{ route('contact') }}"><strong>Add Data</strong></a></button></center>
</div>
@endsection