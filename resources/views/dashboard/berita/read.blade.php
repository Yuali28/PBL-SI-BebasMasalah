<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIBM - Sistem Inforamasi Bebas Masalah</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favico.ico') }}" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  </head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    <img src="{{ asset('assets/img/favico.ico') }}" width="36" height="36" />
      <h1 class="logo me-auto" >
        <a href="#hero" >
            &nbsp;SIBM
        </a>
    </h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Jurusan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="https://poliban.ac.id/elektro/"><span>Teknik Elektro</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="https://poliban.ac.id/elektro/#">D4 Prodi TRPE</a></li>
                  <li><a href="https://poliban.ac.id/elektro/#">D4 Prodi SIKC</a></li>
                  <li><a href="https://poliban.ac.id/elektro/#">D4 Prodi PAB</a></li>
                  <li><a href="https://poliban.ac.id/elektro/d3-teknik-listrik/">D3 Prodi Listrik</a></li>
                  <li><a href="https://poliban.ac.id/elektro/d3-teknik-elektronika/">D3 Prodi Elektronika</a></li>
                  <li><a href="https://poliban.ac.id/elektro/d3-teknik-informatika/">D3 Prodi Teknik Informatika</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#https://poliban.ac.id/"><span>Teknik Mesin</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="https://poliban.ac.id/mesin/d4-teknologi-rekayasa-otomotif/">D4 Teknologi Rekayasa Otomatif</a></li>
                  <li><a href="https://poliban.ac.id/mesin/d3-teknik-mesin/">D3 Teknik Mesin</a></li>
                  <li><a href="https://poliban.ac.id/mesin/mesin-d3-teknik-alat-berat/">D3 Alat Berat</a></li>
                  <li><a href="https://poliban.ac.id/">D2 TODPAB</a></li>
                </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Tentang Kami</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
          @if (Route::has('login'))
          @auth
          <li>
                  <a href="{{ route('dashboard.home') }}" class="nav-link">Dashboard</a>
          </li>
          <li>   
          <form action="/logout" method="POST">
                @csrf 
                  <a class="getstarted scrollto" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                  LOG OUT</a> 
          </form> 
          </li>
                @else
          <li>
                  <a href="{{ route('login') }}" class="getstarted scrollto">LOGIN</a>
          </li>

                    @endauth 

                  @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle" ></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang di Website SIBM</h1>
          <h2>Sistem Informasi Bebas Masalah POLIBAN</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#syarat" class="btn-get-started scrollto">Syarat Bebas Masalah</a>
            <a href="https://www.youtube.com/watch?v=_tOzIis_xNY&ab_channel=HumasPoliban" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/img/favico.ico') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    
  <section id="berita" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-4" style="display: flex; align-items: center;"> <!-- Column for Image -->
        <div class="card mb-4">
          <div class="card-body">
            <img src="{{ asset('storage/thumbnails/' . $berita->thumbnail_berita) }}" alt="" class="img-fluid rounded" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); max-width: 100%;">
          </div>
        </div>
      </div>
      <div class="col-md-8"> <!-- Column for Title and Content -->
        <div class="card">
          <div class="card-header bg-primary text-white" style="text-align: center;">
            <h3 style="margin: 0; padding: 10px; font-size: 24px;">{{ $berita->judul_berita }}</h3>
          </div>
          <div class="card-body">
            <p style="font-size: 16px; line-height: 1.6;">{{ strip_tags(htmlspecialchars_decode($berita->konten_berita)) }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Hubungi Kami</h2>
          <p>Anda Bisa Menemukan Kami melalui Sosial Media kami!</p>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>POLIBAN</h3>
            <div class="address">
                <i class="bi bi-geo-alt"></i>
            Jalan Sutoyo S 12 RT. 40   <br>
            Komplek Pondok Indah Blok 5 70116<br>
            Banjarmasin Kalimantan Selatan <br><br>
              </div>
            <div class="phone">
                <i class="bi bi-phone"></i>
              <strong>Phone :</strong> (0511) 330 5052<br>
            </div>
            <div class="email">
                <i class="bi bi-envelope"></i>
              <strong>Email:</strong>  info@poliban.ac.id<br>
              </div>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Unit</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://tik.poliban.ac.id/?_ga=2.223160603.1086653186.1689227175-840325765.1668540109&_gl=1*xrlgxb*_ga*ODQwMzI1NzY1LjE2Njg1NDAxMDk.*_ga_J766YENGPW*MTY4OTIyNzE3NS40Mi4xLjE2ODkyMjcxODkuMC4wLjA.*_ga_4NKMEQMXF1*MTY4OTIyNzE3NS40NC4xLjE2ODkyMjcxODkuMC4wLjA.">UPT.TIK</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://poliban.ac.id/">P3M</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Temukan Kami di Sosial Media</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fhumaspoliban" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/poliban.ac.id?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/poliban_official/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UC5CfzvUTqEUPXhwwSLvP53Q" class="google-plus"><i class="bx bxl-skype"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom justify-content-center clearfix ">
        &copy; Copyright <strong><span>PBL TEAM 5</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  {{-- script ckeditor --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

</body>

</html>
