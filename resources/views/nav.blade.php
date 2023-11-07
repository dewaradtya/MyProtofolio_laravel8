<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My portofolio | Dewa Raditya</title>

    <!--link bootstrap-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <!--ikon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">>
    
    <!--css link-->
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!--aos link-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" type="image/x" href="{{ asset('img/pp.jpeg')}}">
    
  </head>
  
  <body id="home">
    <!--navbar-->
    
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color : var(--bs-body-bg);">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        MyPortofolio
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('post/index') }}">Laporan</a>
        </li>
        <li class="nav-item dropdown">
          <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-sun-fill theme-icon-active" data-theme-icon-active="bi-sun-fill"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light">
                <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                  Light
              </button>
            </li>
            <li><button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark">
                <i class="bi bi-moon-stars-fill me-2 opacity-50" data-theme-icon="bi-moon-stars-fill"></i>
                  Dark
              </button>
            </li>
            <li><button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="auto">
                <i class="bi bi-circle-half me-2 opacity-50" data-theme-icon="bi-circle-half"></i>
                  Auto
              </button>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
<br/>
<!-- bagian judul halaman blog -->
<h3> @yield('judul') </h3>

<!-- bagian konten blog -->
@yield('isi')

<footer class="bg-secondary text-white">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <h4>My Portofolio</h4>
                <p></p>
            </div>
            <div class="col-md-4">
                <h4>Contact Me</h4>
                <ul class="list-unstyled" >
                    <li><a href="#" style="color: white; text-decoration:none;" >Alamat</a></li>
                    <li><a href="#" style="color: white; text-decoration:none;">Telepon</a></li>
                    <li><a href="#" style="color: white; text-decoration:none;">Email</a></li>
                </ul>
            </div>
            <div class="col-md-4">  
                <h4>Follow More</h4>
                <ul class="list-unstyled">
                    <li><a href="#" style="color: white; text-decoration:none;">Facebook</a></li>
                    <li><a href="https://wa.me/" style="color: white; text-decoration:none;">Whatsapp</a></li>
                    <li><a href="https://instagram.com/dewaradtya?igshid=ZDdkNTZiNTM=" style="color: white; text-decoration:none;">Instagram</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2023 Dewa Raditya.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" style="color: white; text-decoration:none;">Kebijakan Privasi</a></li>
                    <li class="list-inline-item"><a href="#" style="color: white; text-decoration:none;">Syarat dan Ketentuan</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--link JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    <script>
      // Mode

      (() => {
      'use strict'

      const storedTheme = localStorage.getItem('theme')

      const getPreferredTheme = () => {
        if (storedTheme) {
          return storedTheme
        }

        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
      }

      const setTheme = function (theme) {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
          document.documentElement.setAttribute('data-bs-theme', 'dark')
        } else {
          document.documentElement.setAttribute('data-bs-theme', theme)
        }
      }

      setTheme(getPreferredTheme())

      const showActiveTheme = (theme, focus = false) => {
        const themeSwitcher = document.querySelector('#bd-theme')

        if (!themeSwitcher) {
          return
        }

        const themeSwitcherText = document.querySelector('#bd-theme-text')
        const activeThemeIcon = document.querySelector('.theme-icon-active')
        const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
        const iconOfActiveBtn = btnToActive.querySelector('i'). dataset.themeIcon

        document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
          element.classList.remove('active')
          element.setAttribute('aria-pressed', 'false')
        })

        btnToActive.classList.add('active')
        btnToActive.setAttribute('aria-pressed', 'true')
        activeThemeIcon.classList.remove(activeThemeIcon.dataset.themeIconActive)
        activeThemeIcon.classList.add(iconOfActiveBtn)
        activeThemeIcon.dataset.iconActive = iconOfActiveBtn
        const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
        themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

        if (focus) {
          themeSwitcher.focus()
        }
      }

      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        if (storedTheme !== 'light' || storedTheme !== 'dark') {
          setTheme(getPreferredTheme())
        }
      })

      window.addEventListener('DOMContentLoaded', () => {
        showActiveTheme(getPreferredTheme())

      document.querySelectorAll('[data-bs-theme-value]')
        .forEach(toggle => {
          toggle.addEventListener('click', () => {
            const theme = toggle.getAttribute('data-bs-theme-value')
             localStorage.setItem('theme', theme)
             setTheme(theme)
             showActiveTheme(theme, true)
            })
          })
      })

      // Efek mengetik
      function typeWriter(text, element, delay) {
      let i = 0;
      function type() {
          if (i < text.length) {
              element.innerHTML += text.charAt(i);
              i++;
              setTimeout(type, delay);
          }
      }
      type();
      }

      const typingElement = document.getElementById("typing-text");

      const textToType = typingElement.getAttribute("data-type-text");

      const delay = 100;

      typeWriter(textToType, typingElement, delay);

    })()

    </script>
    
    <!-- maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>