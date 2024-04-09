@extends('nav')

@section('judul')

@section('isi')
<section id="home" class="text-center" data-aos="fade-up" data-aos-duration="2000">
    <img src="{{ asset('img/pp.jpeg') }}" alt="Dewa Raditya R" width="200" class="rounded-circle img-thumbnail">
    <h2 class="display-4 mt-3"><span id="typing-text" data-type-text="Dewa Raditya"></span></h2>
    <p class="lead">Student | Web Developer</p>
    <div class="row justify-content-center fs-4 text-center py-5">
        <div class="col-md-5">
          <p> Hello! Thank you for visiting my website.  Apologies if any issues have arisen. Please let us know if you have any recommendations for improvement.</p>
        </div>
      </div>
</section>

@endsection