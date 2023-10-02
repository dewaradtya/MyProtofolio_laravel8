@extends('nav')

@section('judul')

@section('isi')
<section id="Contact">
  <div class="container" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
    <div class="row mb-4">
      <div class="col-md-8">
        <h2>Contact me</h2>
      </div>
    </div>
        <div class="row">
            <div class="col-md-6"> <!-- Kolom pertama untuk formulir -->
                <form action="{{ route('proses_daftar') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" aria-label="Masukkan Nama" value="{{ old('name') }}">
                    </div>
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <div class="mb-4">
                        <label for="umur" class="form-label">Age:</label>
                        <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Enter your age" value="{{ old('umur') }}">
                    </div>
                    @error('umur')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <div class="mb-4">
                        <label for="alamat">Address:</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Enter your address" id="alamat" style="height: 100px;" ></textarea>
                    </div>
                    @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror


                    <button type="submit" class="btn btn-info">Send</button>
                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d15999.64467188645!2d112.69624333362556!3d-7.686549380192462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDEnMTYuNSJTIDExMsKwNDInMTEuNiJF!5e0!3m2!1sid!2sid!4v1695692067632!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <br>


@endsection