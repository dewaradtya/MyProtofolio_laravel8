@extends('nav')

@section('isi')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Projek') }}</div>

                <div class="card-body">
                    <form action="{{ route('projek.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">{{ __('Pilih Gambar') }}</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">{{ __('Title') }}</label>
                            <input type="text" class="form-control" name="title" id="title"  value="{{ old('title') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="link" class="form-label">{{ __('Link') }}</label>
                            <input type="text" class="form-control" name="link" id="link"  value="{{ old('link') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">{{ __('Deskripsi') }}</label>
                            <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for="is_active" class="form-label">{{ __('Status') }}</label>
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="1">{{ __('Publish') }}</option>
                                <option value="0">{{ __('Draft') }}</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary mb-2">{{ __('Create') }}</button>
                            <a href="{{ route('projek.index') }}" class="btn btn-danger">{{ __('Back to Report') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
