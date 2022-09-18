<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MY Portofolio - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/imgasset')}}/1.png" rel="icon">
  <link href="{{asset('img/imgasset')}}/1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Techie')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('Techie')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('Techie')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('Techie')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('Techie')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('Techie')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Techie')}}/assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">cessta</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto " href="/#portfolio">Portfolio</a></li>
          

         <!--  <li><a class="nav-link scrollto" href="#services">Services</a></li>
          
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <li><a class="nav-link scrollto active " href="certificate">Certificate</a></li>
            
          
          
          
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div style="background-color:#653ae8;padding:50px;"></div>
<main id="main">


<!-- ======= Portfolio Section ======= -->
<section id="certificate" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Certificate</h2>
      <p>This is my certificate</p>
    </div>

    

    <div class="row portfolio-container">

      @foreach($data as $dat)
      <div class='col-lg-4 col-md-6 portfolio-item {{$dat->kategori}}'>
        <div class="portfolio-wrap">
          <img src="{{asset('img/imgcertificate')}}/{{$dat->img}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$dat->nama_certificate}}</h4>
            <p>App</p>
          </div>
          <div class="portfolio-links">
            <a href="{{asset('img/imgcertificate')}}/{{$dat->img}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$dat->nama_project}}"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End Portfolio Section -->



</main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Cessta</h3>
        <p>
         Kademangan Kulon, Kademangan<br>
          Kec. Bondowoso, Kabupaten Bondowoso 68217<br>
          Jawa Timur <br><br>
          <strong>Phone:</strong> +62 895397777935<br>
          <strong>Email:</strong> kzkzaj@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
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
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      

    </div>
  </div>
</div>

<div class="container">

  <div class="copyright-wrap d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>me</span></strong>. All Rights Reserved
      </div>
      <!---<div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>-->
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="https://github.com/chuzXII" class="linkedin"><i class="bx bxl-github"></i></a>
    </div>
  </div>

</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('Techie')}}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('Techie')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('Techie')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('Techie')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('Techie')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('Techie')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('Techie')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Techie')}}/assets/js/main.js"></script>

</body>

</html>