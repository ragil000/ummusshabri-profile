    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                <h2><?=$title?></h2>

                <ol>
                    <?php
                        foreach($link_map as $link) {
                    ?>
                    <li><a href="<?=$link['slug']?>"><?=$link['title']?></a></li>
                    <?php
                        }
                    ?>
                </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Section ======= -->
        <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 entries">
                        
                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="<?=base_url('uploads/images/').$results[0]['file']?>" alt="Gambar" style="width:100%; height:auto; object-fit:cover;" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <p><?=$results[0]['title']?></p>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">Admin <?=strtoupper($results[0]['level'])?></a></li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="<?=date('Y-m-d')?>"><?=_dateShortID($results[0]['created_at'])?></time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p><?=$results[0]['content']?></p>
                            </div>

                            <div class="entry-footer clearfix">
                                <div class="float-right share">
                                    <!-- <a href="#" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                    <a href="#" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                    <a href="#" title="Share on Instagram"><i class="icofont-instagram"></i></a> -->
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                        <h3 class="sidebar-title">Other News</h3>
                        <div class="sidebar-item recent-posts">
                            <?php
                                if(!empty($random_news)) {
                                    foreach($random_news as $value) {
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

    </main><!-- End #main -->

    <script>
        $('.parent-menu').removeClass('active');
        $('#parent-2').addClass('active');
    </script>