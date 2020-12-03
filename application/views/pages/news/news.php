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

                        <?php
                            if(!empty($results)) {
                                foreach($results as $value) {
                        ?>
                        <article class="entry">

                            <div class="entry-img">
                                <img src="<?=base_url('uploads/images/smalls/').$value['file']?>" alt="Gambar" style="width:100%; height:300px; object-fit:cover;" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="<?=base_url($value['level'].'/news/detail/').$value['slug']?>"><?=_limitText($value['title'], 170)?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="icofont-user"></i>
                                        <a href="#" class="disabled">Admin <?=$value['level'] != 'institution' ? strtoupper($value['level']) : 'Institution'?></a>
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

                        <div class="blog-pagination">
                            <?=$pagination?>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar">

                                    <h3 class="sidebar-title"><?=(@$levelLink ? substr($levelLink, 0, -1) : NULL) != 'institution' ? strtoupper(substr($levelLink, 0, -1)) : 'Institution'?> Popular News</h3>
                                    <div class="sidebar-item recent-posts">

                                        <?php
                                            if(!empty($popular_news_level)) {
                                                foreach($popular_news_level as $value) {
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
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar">

                                    <h3 class="sidebar-title">All Popular News</h3>
                                    <div class="sidebar-item recent-posts">

                                        <?php
                                            if(!empty($popular_news)) {
                                                foreach($popular_news as $value) {
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
                            </div>
                        </div>

                    </div><!-- End blog sidebar -->

                </div><!-- End row -->

            </div><!-- End container -->
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <script>
        $('.parent-menu').removeClass('active');
        $('#parent-2').addClass('active');
    </script>