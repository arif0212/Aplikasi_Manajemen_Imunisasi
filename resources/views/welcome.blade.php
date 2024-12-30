<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aplikasi manajemen Aplikasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template_depan/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template_depan/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template_depan/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template_depan/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <img id="main-logo" class="d-inline-block align-top" style="max-width: 45px;"
    src="{{asset('asset_template/images/logoremove.png')}}" alt="Shards Dashboard">
      <h5 class=" mr-auto"><a href="{{Route('login')}}">Aplikasi Manajemen Imunisasi</a></h5>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#tentang">Tentang Aplikasi</a></li>
        </ul>
      </nav><!-- .nav- -->

      <a href="{{Route('login')}}" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container text-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Posyandu Berbasis Web</h1>
      <h2>Aplikasi Manajemen Imunisasi Berbasis Web</h2>
      <!-- <a href="#pendaftaran" class="btn-get-started">Pendaftaran Imunisasi</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="tentang" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('template_depan/assets/img/posyandu-1.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p class="text-justify">Posyandu (Pos Pelayanan Terpadu) adalah layanan kesehatan berbasis masyarakat yang bertujuan memberikan pelayanan kesehatan dasar secara terpadu, 
              khususnya untuk ibu, bayi, balita, dan lansia. Layanan ini dikelola secara mandiri oleh masyarakat setempat dengan bimbingan tenaga kesehatan seperti bidan atau petugas puskesmas.
               Posyandu biasanya beroperasi di tingkat desa atau kelurahan sebagai salah satu upaya meningkatkan akses masyarakat terhadap layanan kesehatan. </p>
            <p class="text-justify">Kegiatan utama Posyandu meliputi penimbangan berat badan balita, pemantauan tumbuh kembang anak, imunisasi, konseling gizi, dan pemeriksaan kesehatan ibu hamil. Selain itu, Posyandu juga berfungsi sebagai tempat edukasi kesehatan dan pencegahan penyakit melalui penyuluhan. Dengan pendekatan partisipatif,
               Posyandu menjadi salah satu bentuk gotong royong dalam pelayanan kesehatan masyarakat, terutama di daerah dengan akses terbatas ke fasilitas kesehatan formal.</p>
            <!-- <a href="about.html" class="learn-more-btn">Learn More</a> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  @include('sweetalert::alert')
  <!-- Vendor JS Files -->
  <script src="{{asset('template_depan/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template_depan/assets/js/main.js')}}"></script>

</body>

</html>