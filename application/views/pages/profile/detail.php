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

                    <div class="col-lg-12 entries">
                        
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

                </div><!-- End row -->

            </div><!-- End container -->
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <script>
        $('.parent-menu').removeClass('active');
        $('#parent-3').addClass('active');
        
        let youtubeEmbedUrl = []

        let oembed = $('oembed')
        for(let i = 0; i < oembed.length; i++) {
            let url = $(oembed[i]).attr('url')
            let path = url.replace('https://youtu.be/', '')
            let youtubeEmbed = '<div class="row justify-content-center">'+
                                '<div class="col-12 text-center">'+
                                    '<iframe style="width: 50%; height: 50vh;" src="https://www.youtube.com/embed/'+path+'"></iframe>'+
                                '</div>'+
                            '</div>'
            youtubeEmbedUrl.push(youtubeEmbed)
        }
        
        let figure = $('figure')
        for(let i = 0; i < figure.length; i++) {
            $(figure[i]).replaceWith(youtubeEmbedUrl[i])
        }
    </script>