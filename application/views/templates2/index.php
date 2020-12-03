<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ummusshabri Kendari</title>
  <meta content="Sholih, Islamist, Populist, Archievers, Socialist & Environmentally Friendly" name="descriptison">
  <meta content="sekolah islam terpadu, sekolah islam, pesantren ummusabri, ummusabri, ummu sabri, ummusabri kendari, ummu sabri kendari, mi, mts, ma" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('template/awal')?>/assets/img/logo-pesri.png" rel="icon">
  <link href="<?=base_url('template/awal')?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('template/awal')?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('template/awal')?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url('template/awal')?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('template/awal')?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url('template/awal')?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url('template/awal')?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('template/awal')?>/assets/css/style.css" rel="stylesheet">

  <script src="<?=base_url('template/awal')?>/assets/vendor/jquery/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Techie - v2.1.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
    if(@$detail == true) {
  ?>
  <header id="header" class="fixed-top header-scrolled-rmy">
  <?php
    }else {
  ?>
  <header id="header" class="fixed-top">
  <?php
    }
  ?>
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="<?=base_url()?>" class="logo mr-3"><img src="<?=base_url('template/awal')?>/assets/img/logo-pesri.png" alt="" class="img-fluid"></a>
          <h3 class="logo mr-auto"><a href="<?=base_url(@$levelLink | '')?>"><?=@$levelLink ? strtoupper(substr($levelLink, 0, -1)) : 'Ummusabri'?></a></h3>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <?php
                // $levelLink = @$levelLink?$levelLink:'yayasan/';
                if(@$levelLink){
              ?>
              <li id="parent-1" class="parent-menu active"><a href="<?=base_url($levelLink)?>">Home</a></li>
              <li id="parent-2" class="parent-menu"><a href="<?=base_url($levelLink.'news')?>">News</a></li>
              <li id="parent-3" class="parent-menu"><a href="<?=base_url($levelLink.'profile')?>">Profile</a></li>
              <li id="parent-4" class="parent-menu"><a href="<?=base_url($levelLink.'galery')?>">Galery</a></li>
              <li id="parent-5" class="drop-down parent-menu"><a href="">Websites</a>
                <ul>
                  <li><a href="<?=base_url('institution')?>">Ummusabri Institution</a></li>
                  <li><a href="<?=base_url('mi')?>">Madrasah Ibtidaiyah</a></li>
                  <li><a href="<?=base_url('mts')?>">Madrasah Tsanawiyah</a></li>
                  <li><a href="<?=base_url('ma')?>">Madrasah Aliyah</a></li>
                </ul>
              </li>
              <?php
                }else {
              ?>
              <li id="parent-1" class="parent-menu active"><a href="<?=base_url()?>">Home</a></li>
              <li id="parent-2" class="parent-menu"><a href="<?=base_url('news')?>">News</a></li>
              <li id="parent-3" class="drop-down parent-menu"><a href="">Profiles</a>
                <ul>
                  <li><a href="<?=base_url('institution/profile')?>">Ummusabri Institution</a></li>
                  <li><a href="<?=base_url('mi/profile')?>">Madrasah Ibtidaiyah</a></li>
                  <li><a href="<?=base_url('mts/profile')?>">Madrasah Tsanawiyah</a></li>
                  <li><a href="<?=base_url('ma/profile')?>">Madrasah Aliyah</a></li>
                </ul>
              </li>
              <?php
                }
              ?>
            </ul>
          </nav><!-- .nav-menu -->

          <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <?=@$header?>

  <main id="main">
  
    <?=@$isi?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Ummusabri Kendari</h3>
            <p>
              Bende, Kadia District, <br>
              Kendari City,<br>
              Southeast Sulawesi 93111 <br><br>
              <strong>Phone:</strong> +62 355 65558<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Websites Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url()?>">Base Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('institution')?>">Institution Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('mi')?>">MI Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('mts')?>">MTS Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('ma')?>">MA Home</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Profiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('institution/profile')?>">Institution Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('mi/profile')?>">MI Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('mts/profile')?>">MTS Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('ma/profile')?>">MA Profile</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Priority</h4>
            <p>Sholih, Islamist, Populist, Archievers, Socialist & Environmentally Friendly</p>
            <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright <strong><span><a href="https://www.instagram.com/codexv.group/" class="text-light">CodeXV</a></span></strong>
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
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

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  <script src="<?=base_url('template/awal')?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url('template/awal')?>/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('template/awal')?>/assets/js/main.js"></script>

</body>

</html>