<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/fav.png') ?>">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Macro</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>

<body>
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="logo">
                        <a href="index.html"><img width="100" src="<?php echo base_url('assets/img/icon.png') ?>" alt="" title="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-center d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#gallery">Gallery</a></li>

                        <li><a href="#kontak">Contact</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-12 banner-content">
                    <h6 class="text-white">Selamat datang di website</h6>
                    <h1 class="text-white">Madura Resto</h1>
                    <p class="text-white">
                        Madura Resto menyedikan berbagai macam menu makanan yang enak.
                    </p>
                    <a href="#menu" style="background-color:#ff9600;" class="primary-btn text-uppercase">Check Our Menu</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 home-about-left">
                    <h1>Tentang</h1>
                    <p>
                        Madura Resto adalah Restauran asli dari madura yang mempunyai cabang di setiap kota indonesia di dalam restauran ini ada banyak varian menu khas maadura dan menu makanan tradisiosal lainnya.
                    </p>
                    <a href="#menu" style="background-color:#ff9600;" class="primary-btn">view full menu</a>
                </div>
                <div class="col-lg-6 home-about-right">
                    <img class="img-fluid" src="<?php echo base_url('assets/img/gggg.png ') ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start menu-area Area -->

    <!-- End menu-area Area -->

    <!-- Start reservation Area -->

    <!-- End reservation Area -->

    <!-- Start gallery-area Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Galeri Madura Resto</h1>
                        <p>Ini adalah foto-foto tentang Madura Resto.</p>
                    </div>
                </div>
            </div>



            <div class="filters-content">
                <div class="row grid">
                    <?php foreach ($tb_galeri as $galeri) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            <div class="single-gallery">
                                <img class="img-fluid" src="<?php echo base_url('upload/galeri/' . $galeri->gambar_minuman) ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>
    <!-- End gallery-area Area -->

    <!-- Start review Area -->

    <!-- End review Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="menu">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Menu Makanan</h1>
                        <p>Ini adalah menu makanan yang ada di madura resto.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($tb_makanan as $makanan) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="<?php echo base_url('upload/product/' . $makanan->gambar_makanan) ?>" alt="">
                        </div>
                        <p class="date">Rp. <?php echo $makanan->harga_makanan ?></p>
                        <a href="blog-single.html">
                            <h4><?php echo $makanan->nama_makanan ?></h4>
                        </a>
                        <p>
                            <?php echo $makanan->desc_makanan ?>
                        </p>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

    <!-- start footer Area -->

    <footer class="footer-area">
        <div style="background-color:#ff9600;" class="footer-widget-wrap">
            <div class="container">
                <section class="section-gap" id="kontak">
                    <div class="row section-gap">
                        <div class="col-lg-4  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Opening Hours</h4>
                                <ul class="hr-list">
                                    <li class="d-flex justify-content-between">
                                        <span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Saturday</span> <span>08.00 am - 10.00 pm</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span>Sunday</span> <span>08.00 am - 10.00 pm</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Contact Us</h4>
                                <p>
                                    56/8, los angeles, rochy beach, Santa monica, United states of america - 1205
                                </p>
                                <p class="number">
                                    012-6532-568-9746 <br> 012-6532-569-9748
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>You can trust us. we only send promo offers, not a single spam.</p>
                                <div class="d-flex flex-row" id="mc_embed_signup">


                                    <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                        <div class="input-group add-on align-items-center d-flex">
                                            <input class="form-control" name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required="" type="email">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                            <div class="input-group-btn">
                                                <button style="background-color:#ff9600;" class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
                                            </div>
                                        </div>
                                        <div class="info mt-20"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </section>
            </div>
        </div>
        </div>

        <div class="footer-bottom-wrap">
            <div class="container">
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- End footer Area -->

    <script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverIntent.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/superfish.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/mail-script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>