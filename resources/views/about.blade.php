@extends('nav')

@section('isi')
    <section id="about">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center" data-aos="fade-up" data-aos-duration="1800">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                    <p>Hi, I'm Dewa Raditya Rochman and I reside in Pasuruan Regency. I'm a student at SMKN 1 Purwosari
                        school.</p>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                    <p>Hi, I'm Dewa Raditya Rochman and I reside in Pasuruan Regency. I'm a student at SMKN 1 Purwosari
                        school.</p>
                    <div class="row gx-1" style="background-color : var(--bs-body-bg);">
                        <div class="col-3">
                            <a class="bi bi-instagram" target="_blank"
                                href="https://instagram.com/dewaradtya?igshid=ZDdkNTZiNTM=">
                            </a>
                        </div>

                        <div class="col-3" style="background-color : var(--bs-body-bg);">
                            <div class="card-body">
                                <a class="bi bi-whatsapp" target="_blank" href="https://wa.me/081332611178">
                                </a>
                            </div>
                        </div>

                        <div class="col-3" style="background-color : var(--bs-body-bg);">
                            <div class="card-body">
                                <a class="bi bi-spotify" target="_blank" href="https://spotify.link/w9eb1FVgPyb">
                                </a>
                            </div>
                        </div>

                        <div class="col-3" style="background-color : var(--bs-body-bg);">
                            <div class="card-body">
                                <a class="bi bi-github" target="_blank" href="https://github.com/dewaradtya">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Project">
        <div class="container">
            <div class="row text-center mb-1">
                <div class="col">
                    <h2>My Project</h2>
                    <p>Here are the projects I've completed.</p>
                </div>
            </div>

            <div class="row">
                @foreach ($projek as $index => $row)
                @if ($row->is_active)
                    <div class="col-md-4 mb-4 gy-1" data-aos="fade-up" data-aos-duration="{{ 1000 + $index * 200 }}">
                        <div class="card">
                            <img src="{{ asset('img/projek/' . $row->image) }}" class="card-img-top" alt="projek 1">
                            <div class="card-body">
                                <h5 class="card-title">{{ $row->title }}</h5>
                                <p class="card-text">{{ $row->content }}</p>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('detail', ['id' => $row->id]) }}" class="btn btn-primary">Selengkapnya
                                    <i class="bi bi-arrow-right-circle text-white"></i>
                                </a>
                                <a href="{{ $row->link }}" target="_blank" class="btn btn-dark text-white rounded-4">
                                    <i class="bi bi-github me-2 text-white"></i>Github
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>            
        </div>
    </section>
@endsection
