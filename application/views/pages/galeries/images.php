    <main id="main">


        
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galery</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row portfolio-container">
        <?php
            if(!empty($results)) {
                foreach($results as $value) {
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url('uploads/images/smalls/').$value['file']?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?=$value['title']?></h4>
                <!-- <p>App</p> -->
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('uploads/images/').$value['file']?>" data-gall="portfolioGallery" class="venobox" title="<?=$value['title']?>"><i class="bx bx-search"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
          <?php
                  }
              }else {
          ?>
          <div class="col-lg-12 col-md-6 portfolio-item filter-app">
            <h3 class="text-center">Data is empty.</h3>
          </div>
          <?php
              }
          ?>


        </div>

      </div>
    </section><!-- End Portfolio Section -->
        <!-- ======= Blog Section ======= -->
        <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <div class="blog-pagination">
                            <?=$pagination?>
                        </div> 
                    </div><!-- End blog entries list -->

                </div><!-- End row -->

            </div><!-- End container -->
        
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <script>
        $('.parent-menu').removeClass('active');
        $('#parent-4').addClass('active');
    </script>