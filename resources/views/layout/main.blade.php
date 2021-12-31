<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://i.redd.it/jqt9q5252uj71.jpg" rel="icon">
  <link href="resources/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/resources/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/resources/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/resources/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .logout:hover{
      background-color: transparent;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="index.html" class="logo me-auto me-lg-0"><img src="/../../prnbess/resources/img/logo.png" alt="error" class="img-fluid"></a>
      <h1 class="logo me-auto me-lg-0"><a href="{{ url('/') }}">BESS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="@yield('home')" href="{{ url('/') }}">Grid</a></li>
          <li><a class="@yield('about')" href="{{ url('/about') }}">Load</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/about') }}">Usages</a></li>
          <li><a class="nav-link scrollto " href="{{ url('/about') }}">Cost</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/about') }}">Documentation</a></li>
          <li class="dropdown"><a href="#"><span>Team</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Power</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Anggota 1</a></li>
                  <li><a href="#">Anggota 2</a></li>
                  <li><a href="#">Anggota 3</a></li>
                  <li><a href="#">Anggota 4</a></li>
                  <li><a href="#">Anggota 5</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Control</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Anggota 1</a></li>
                  <li><a href="#">Anggota 2</a></li>
                  <li><a href="#">Anggota 3</a></li>
                  <li><a href="#">Anggota 4</a></li>
                  <li><a href="#">Anggota 5</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Information</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Anggota 1</a></li>
                  <li><a href="#">Anggota 2</a></li>
                  <li><a href="#">Anggota 3</a></li>
                  <li><a href="#">Anggota 4</a></li>
                  <li><a href="#">Anggota 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('/about') }}">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        @auth
        <ul>
          <li class="dropdown"><a class="active" href="#"><span>{{ auth()->user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/prnbess/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="dropdown">
                <a><i class="bi bi-box-arrow-right"></i>
                <form action="/prnbess/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item logout">Logout</button>
                </form>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        @endauth
      </nav><!-- .navbar -->


      @guest
      <a href="{{ url('/login') }}" class="get-started-btn scrollto">Login</a>
      @endguest
      <a href="https://uns.ac.id/id/" class="logo me-auto me-lg-0"><img src="/../../prnbess/resources/img/logoo.png" alt="error" class="img-fluid"></a>
      <a href="https://www.brin.go.id/" class="logo me-auto me-lg-0"><img src="/../../prnbess/resources/img/brin.png" alt="error" class="img-fluid"></a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Digital PRN BESS<span>.</span></h1>
          <h2>We are team of talented digital marketers</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a class="nav-link scrollto" href="#about">Home</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a class="nav-link scrollto" href="#services">Dashboard</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Usages</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Cost</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="">Documentation</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section> -->
  <!-- End Hero -->
  
  @yield('container')

  @yield('footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('/resources/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/resources/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/resources/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/resources/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/resources/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/resources/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('/resources/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/resources/js/main.js') }}"></script>
  </body>
</html>