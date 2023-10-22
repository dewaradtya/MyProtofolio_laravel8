@extends('nav')

@section('judul')

@section('isi')
<section class="home text-center" data-aos="fade-up"
     data-aos-duration="2000">
    <img src="{{ asset('img/pp.jpeg') }}" alt="Dewa Raditya R" width="200" class="rounded-circle img-thumbnail">
    <h2 class="display-4"><span id="typing-text" data-type-text="">Dewa Raditya</span></h2>
    <p class="lead">Student | Atlet</p>
    <div class="row justify-content-center fs-4 text-center">
        <div class="col-md-5">
          <p> Hello! Thank you for visiting my website.  Apologies if any issues have arisen. Please let us know if you have any recommendations for improvement.</p>
        </div>
      </div>
      <br>
      <br>
</section>
<br>

@endsection