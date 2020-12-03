<?php
  $bg_hero = '';
  $hero_img = '<img src="'.base_url('template/awal').'/assets/img/hero-img.png" class="img-fluid animated" alt="">';
  if(@$levelLink) {
    $bg_hero = 'hero-rmy';
    if(@$galery) {
      $hero_img = '<img src="'.base_url('template/awal').'/assets/img/hero-um.jpg" class="img-fluid animated" alt="">';
    }else if(@$level_home) {
      $hero_img = '<img src="'.base_url('template/awal').'/assets/img/logo-pesri.png" class="img-fluid animated" style="width: 65%; height: auto;" alt="">';
    }
  }
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex <?=$bg_hero?> align-items-center">

<div class="container-fluid" data-aos="fade-up">
  <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1><?=$head?></h1>
      <h2><?=$content?></h2>
      <!-- <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div> -->
    </div>
    <div class="col-xl-4 col-lg-6 order-1 text-center order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
      <?=$hero_img?>
    </div>
  </div>
</div>

</section><!-- End Hero -->