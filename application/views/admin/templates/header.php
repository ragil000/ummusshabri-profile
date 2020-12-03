<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Website resmi Litbang kabupaten Bombana, Sulawesi Tenggara">
        <meta name="author" content="Creative Tim">
        <title>Ummusabri Kendari | Admin</title>
        <!-- Favicon -->
        <link href="<?=base_url()?>back/assets/img/brand/logo-pesri.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="<?=base_url()?>back/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="<?=base_url()?>back/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="<?=base_url()?>back/assets/css/argon.css?v=1.0.0" rel="stylesheet">

        <!-- custom CSS -->
        <link type="text/css" href="<?=base_url()?>back/assets/css/custom.css" rel="stylesheet">

        <!-- SIM editor -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>back/node_modules/simditor/styles/simditor.css" />

        <style>
            /* width */
            ::-webkit-scrollbar {
                width: 5px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #888; 
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #191D4D; 
            }
        </style>

    </head>

    <body>

        <!-- Sidenav -->
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
            <div class="container-fluid">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <a class="navbar-brand pt-0" href="<?=base_url('admin/journal')?>">
                    <!-- <img src="<?=base_url()?>back/assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
                    <h2 class="text-primary">Ummusabri Kendari</h2>
                </a>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="<?=base_url('admin/journal')?>">
                                    <!-- <img src="<?=base_url()?>back/assets/img/brand/blue.png"> -->
                                    <h2 class="text-primary">Ummusabri Kendari</h2>
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" id="beranda" href="<?=base_url('admin/dashboard')?>">
                                <i class="ni ni-tv-2 text-primary"></i> Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="news" href="<?=base_url('admin/news')?>">
                                <i class="ni ni-collection text-purple"></i> Artikel & Berita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile" href="<?=base_url('admin/profile')?>">
                                <i class="ni ni-ui-04 text-success"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="galery" href="<?=base_url('admin/galery')?>">
                                <i class="ni ni-image text-danger"></i> Galery
                            </a>
                        </li>
                    </ul>

                    <!-- Divider -->
                    <hr class="my-3">

                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('admin/Auth/logout')?>">
                                <i class="ni ni-curved-next"></i> Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <div class="main-content">
        
            <!-- Top navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
            
                    <!-- Brand -->
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?=base_url()?>back/index.html"><?=$head?></a>

                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?=base_url()?>back/assets/img/theme/user.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?=$_SESSION['username']?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Selamat datang!</h6>
                                </div>
                                <!-- <a href="#" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Pengaturan</span>
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a href="<?=base_url('admin/Auth/logout')?>" class="dropdown-item">
                                    <i class="ni ni-curved-next"></i>
                                    <span>Keluar</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
                
            <!-- Header -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                    <div class="header-body">
                    
                        <!-- Card stats -->
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Artikel & Berita</h5>
                                                <span class="h2 font-weight-bold mb-0"><?=@$news ? $news : 0?></span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="ni ni-single-copy-04"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-nowrap">Tahun <?=@$newsTahun ? $newsTahun : date('Y')?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
          
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Foto Galery</h5>
                                                <span class="h2 font-weight-bold mb-0"><?=@$gamery ? $gamery : 0?></span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-nowrap">Tahun <?=@$gameryTahun ? $gameryTahun : date('Y')?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Pembaca Berita</h5>
                                                <span class="h2 font-weight-bold mb-0"><?=@$views ? $views[0]['views'] : 0?></span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                    <i class="ni ni-align-left-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-nowrap">Tahun <?=@$viewsTahun ? $viewsTahun : date('Y')?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- Page content -->
            <div class="container-fluid mt--7">
