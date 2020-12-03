
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Websites</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <i class="bx bx-home"></i>
              </div>
              <h4><a href="<?=base_url('institution')?>">Institution</a></h4>
              <p>Ummusshabri Institution</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <i class="bx bx-home-circle"></i>
              </div>
              <h4><a href="<?=base_url('mi')?>">MI</a></h4>
              <p>Madrasah Ibtidaiyah</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <i class="bx bxs-school"></i>
              </div>
              <h4><a href="<?=base_url('mts')?>">MTS</a></h4>
              <p>Madrasah Tsanawiyah</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <i class="bx bx-home-smile"></i>
              </div>
              <h4><a href="<?=base_url('ma')?>">MA</a></h4>
              <p>Madrasah Aliyah</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Blog Section ======= -->
    <section class="blog section-bg" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Popular News</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-8 entries">

              <?php
                  if(!empty($popular_news)) {
                      foreach($popular_news as $value) {
              ?>
              <article class="entry">

                  <div class="entry-img">
                      <img src="<?=base_url('uploads/images/smalls/').$value['file']?>" alt="Image" style="width:100%; height:300px; object-fit:cover;" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                      <a href="<?=base_url($value['level'].'/news/detail/').$value['slug']?>"><?=_limitText($value['title'], 170)?></a>
                  </h2>

                  <div class="entry-meta">
                      <ul>
                          <li class="d-flex align-items-center">
                              <i class="icofont-user"></i>
                              <a href="#">Admin <?=strtoupper($value['level'])?></a>
                          </li>
                          <li class="d-flex align-items-center">
                              <i class="icofont-wall-clock"></i>
                              <a href="#"><time datetime="2020-01-01"><?=_dateShortID($value['created_at'])?></time></a>
                          </li>
                      </ul>
                  </div>

                  <div class="entry-content">
                      <p><?=_limitText($value['content'], 450)?></p>
                      <div class="read-more">
                          <a href="<?=base_url($value['level'].'/news/detail/').$value['slug']?>">Read more</a>
                      </div>
                  </div>

              </article><!-- End blog entry -->
              <?php
                      }
                  }else {
              ?>
                  <h3 class="text-center mt-3">Data is empty.</h3>
              <?php
                  }
              ?>

          </div><!-- End blog entries list -->
          
          <div class="col-lg-4">

                <div class="sidebar">

                  <h3 class="sidebar-title">New News</h3>
                  <div class="sidebar-item recent-posts">

                      <?php
                          if(!empty($new_news)) {
                              foreach($new_news as $value) {
                      ?>
                      <div class="post-item clearfix">
                          <img src="<?=base_url('uploads/images/thumbs/').$value['file']?>" alt="gambar">
                          <h4><a href="<?=base_url($value['level'].'/news/detail/').$value['slug']?>"><?=_limitText($value['title'],35)?></a></h4>
                          <time datetime="<?=date('Y-m-d')?>"><?=_dateShortID($value['created_at'])?></time>
                      </div>
                      <?php
                              }
                          }else {
                      ?>
                      <h3>Data is empty.</h3>
                      <?php
                          }
                      ?>

                  </div><!-- End sidebar recent posts-->

                </div><!-- End sidebar -->

              </div><!-- End blog sidebar -->

        </div><!-- End row -->

      </div><!-- End container -->
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Bende, Kadia District, Kendari City, Southeast Sulawesi 93111</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+62 355 65558</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-12 ">
            <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
              <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(Yayasan%20Ummusshabri%20Kendari,%20Bende,%20Kota%20Kendari,%20Sulawesi%20Tenggara,%20Indonesia)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <!-- <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section><!-- End Contact Section -->