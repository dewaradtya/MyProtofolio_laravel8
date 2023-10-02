@extends('nav')

@section('isi')
<section id="about">
  <div class="container" data-aos="fade-up" data-aos-duration="3000">
    <div class="row mb-4">
      <div class="col">
        <h2>About Me</h2>
      </div>
    </div>
      <div class="row justify-content-center fs-5 text-center" data-aos="fade-up" data-aos-duration="1800">
        <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
          <p>Hi, I'm Dewa Raditya Rochman and I reside in Pasuruan Regency. I'm a student at SMKN 1 Purwosari school.</p>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
          <p>Hi, I'm Dewa Raditya Rochman and I reside in Pasuruan Regency. I'm a student at SMKN 1 Purwosari school.</p>
         <div class="row gx-1" style="background-color : var(--bs-body-bg);">
           <div class="col-3">
              <a class="bi bi-instagram" href="https://instagram.com/dewaradtya?igshid=ZDdkNTZiNTM=">
              </a>
           </div>
          
           <div class="col-3" style="background-color : var(--bs-body-bg);">
             <div class="card-body">
                <a class="bi bi-whatsapp" href="https://wa.me/">
                </a>
             </div>
           </div>
           
           <div class="col-3" style="background-color : var(--bs-body-bg);">
             <div class="card-body">
                <a class="bi bi-spotify" href="https://spotify.link/w9eb1FVgPyb">
                </a>
             </div>
           </div>
           
           <div class="col-3" style="background-color : var(--bs-body-bg);">
             <div class="card-body">
                <a class="bi bi-github" href="https://github.com/dewaradtya">
                </a>
             </div>
           </div>
          </div>
        </div>
      </div>
  </div>
</section>

<section id="Project">
  <div class="container" data-aos="fade-up" data-aos-duration="3000">
    <div class="row text-center mb-">
      <div class="col">
        <h2>My Project</h2>
        <p>Here are the projects I've completed.</p>
      </div>
    </div>
    
    <div class="row" data-aos="fade-up" data-aos-duration="1800">
      <div class="col-md-4 mb-4 gy-1">
        <div class="card">
          <img src="{{ asset('img/projek1.jpeg') }}" class="card-img-top" alt="projek 1">
          <div class="card-body">
            <h5 class="card-title">Projek 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4 gy-1">
        <div class="card">
          <img src="{{ asset('img/projek2.jpeg') }}" class="card-img-top" alt="projek 2">
          <div class="card-body">
            <h5 class="card-title">My School</h5>
            <p class="card-text">My school project is a project that I worked on while taking the fundamental course at RevoU.</p>
          </div>
          <div class="card-body">
            <a href="https://revou-fundamental-course.github.io/21-aug-23-dewaradtya/" class="card-link">Link Projek Saya</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4 gy-1">
        <div class="card">
          <img src="{{ asset('img/projek2.jpeg') }}" class="card-img-top" alt="projek 3">
          <div class="card-body">
            <h5 class="card-title">Projek 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection