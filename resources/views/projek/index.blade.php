@extends('nav')


@section('isi')
    <div class="container mt-5">
        <div class="row text-center mb-4">
            <div class="col">
                <h2>Data Projek</h2>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projek as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td><img src="{{ asset('img/projek/' . $row->image) }}" alt="" style="width: 100px;"></td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->link }}</td>
                        <td>{{ Str::limit($row->content, 150) }}</td>
                        <td>
                            <a href="{{ route('projek.show', $row->id) }}" class="btn btn-info m-1"><strong>View</strong></a>
                            <a href="{{ route('projek.edit', $row->id) }}"
                                class="btn btn-warning m-1"><strong>Edit</strong></a>
                            <form action="{{ route('projek.destroy', $row->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1"><strong>Delete</strong></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <center><button type="button" class="btn btn-primary m-5"><a class="text-white" style="text-decoration: none;"
                    href="{{ route('projek.create') }}"><strong>Add Data</strong></a></button></center>
    </div>
@endsection
