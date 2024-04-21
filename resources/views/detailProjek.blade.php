@extends('nav')

@section('isi')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <article class="card shadow">
                <img src="{{ asset('img/projek/' . $projek->image) }}" alt="{{ $projek->title }}" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title">{{ $projek->title }}</h2>
                    <p class="card-text">
                        <small class="text-muted">{{ $projek->created_at->format('d M Y') }}</small>
                    </p>
                    <p class="card-text">{{ $projek->content }}</p>
                    <a href="{{ $projek->link }}" target="_blank" class="btn btn-dark text-white rounded-4">
                        <i class="bi bi-github me-2 text-white"></i>Github
                    </a>
                </div>
                <div class="card-footer text-muted">
                    <p class="mb-0">{{ $projek->slug }}</p>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection