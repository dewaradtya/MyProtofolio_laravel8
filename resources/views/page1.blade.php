<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg bg-danger border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Portofolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>  
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projek
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>    
    </div>
  </div>
</nav>


<!-- home -->
<section id="home">
<div class="card text-bg-light" data-bs-theme="light">
  <img src="{{ asset('img/gambar1.jpg') }}" class="card-img" style="background-size: cover; height: 600px;">
  <div class="card-img-overlay">

<div class="jumbotron text-center m-5">
    <h1>Selamat Datang di Portofolio Saya</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#" class="btn btn-danger m-4">Pelajari Lebih Lanjut</a>
</div>

<div class="card-group m-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">About</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officia aliquam illo soluta illum enim vitae impedit quod voluptate quibusdam.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Service</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id repellat asperiores tempore harum quos voluptas officia. Itaque, voluptas. Eligendi, praesentium.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
        </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi molestiae cupiditate pariatur perferendis reprehenderit maiores neque amet eos distinctio odit.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>