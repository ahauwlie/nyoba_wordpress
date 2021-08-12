<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>RetroCactus</title>
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?= get_theme_file_uri('/blog/assets/images/ico/favicon.png') ?>" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?= get_theme_file_uri('/blog/assets/images/ico/apple-touch-icon-57-precomposed.png') ?>">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= get_theme_file_uri('/blog/assets/images/ico/apple-touch-icon-72-precomposed.png') ?>">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= get_theme_file_uri('/blog/assets/images/ico/apple-touch-icon-114-precomposed.png') ?>">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= get_theme_file_uri('/blog/assets/images/ico/apple-touch-icon-144-precomposed.png') ?>">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Global css -->
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/bootsnav/bootsnav.min.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/animate/animate.min.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/themify-icons/themify-icons.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/owl-carousel/owl.carousel.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/owl-carousel/owl.theme.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/owl-carousel/owl.transitions.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/css/social-likes_birman.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/magnific-popup/magnific-popup.min.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/unitegallery/css/unite-gallery.min.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/unitegallery/themes/default/ug-theme-default.min.css') ?>" rel="stylesheet">
        <link href="<?= get_theme_file_uri('/blog/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>" rel="stylesheet">
        <!-- Style css-->
        <link href="<?= get_theme_file_uri('/blog/assets/css/style.css') ?>" rel="stylesheet">
    </head>
    
    <body>
        <div class="se-pre-con"></div>
        <!-- /.Page Loader -->
        <div class="page-content">
            <div class="main-wrapper">
                <header class="header">
                    <div class="container">
                        <div class="top-bar">
                            <div class="row">
                                <div class="col-md-9 col-sm-6  hidden-xs">
                                    <span class="tel">
                                        <span class="fa fa-phone"></span><?php echo get_theme_mod('notelp_nav') ?></span>
                                    <span class="email">
                                        <span class="fa fa-envelope-o"></span><?php echo get_theme_mod('email_nav') ?></span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 social">
                                    <ul>
                                        <li>
                                            <a href="<?php echo get_theme_mod('twitter_nav') ?>" class="fa fa-twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="<?php echo get_theme_mod('facebook_nav') ?>" class="fa fa-facebook">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_theme_mod('instagram_nav') ?>" class="fa fa-instagram">
                                                <span class="fa fa-instagram"></span>
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="<?php echo get_theme_mod('linkedin_nav') ?>" class="fa fa-linkedin">
                                                <span class="fa fa-linkedin"></span>
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="<?php echo get_theme_mod('youtube_nav') ?>" class="fa fa-youtube">
                                                <span class="fa fa-youtube"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.Top bar -->
                    <div class="author-vcard">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-sm-4">
                                    <div class="avatar" style="background-image: url('<?php echo get_theme_mod('pp_nav') ?>')"></div>
                                </div>
                                <div class="col-lg-7 col-sm-8">
                                    <div class="author-content">
                                        <div class="author-name">
                                            <!-- <h1><strong>Hey!</strong> I am Naeem Khan,<br> I am a  <span id="js-rotating" class="type-color">blogger, <em>journalist</em></span> <span>& writer</span></h1> -->
                                            <?php echo get_theme_mod('hey_nav') ?>
                                        </div>
                                        <div class="social">
                                            <a href="<?php echo get_theme_mod('twitter_nav') ?>" target="_blank" class="icon icon-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="<?php echo get_theme_mod('facebook_nav') ?>" target="_blank" class="icon icon-facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="<?php echo get_theme_mod('linkedin_nav') ?>" target="_blank" class="icon icon-linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="<?php echo get_theme_mod('instagram_nav') ?>" target="_blank" class="icon icon-instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="<?php echo get_theme_mod('youtube_nav') ?>" target="_blank" class="icon icon-youtube"><i class="fa fa-youtube"></i></a>
                                        </div>               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.author-vcard -->
                    <nav class="navbar navbar-default navbar-sticky bootsnav">
                        <!-- Start Fullscreen Search -->
                        <div class="fullscreen-search-overlay" id="search-overlay">
                            <a href="javascript:void(0)" class="fullscreen-close" id="fullscreen-close-button"><i class="ti-close"></i></a>
                            <div id="fullscreen-search-wrapper">
                                <form method="get" id="fullscreen-searchform">
                                    <input type="text" value="" placeholder="Type keyword(s) here" id="fullscreen-search-input">
                                    <i class="ti-search fullscreen-search-icon"><input value="" type="submit"></i>
                                </form>
                            </div>
                        </div>
                        <!-- End Fullscreen Search -->
                        <div class="container">            
                            <!-- Start Atribute Navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="side-menu"><a href="javascript:void(0)"><i class="ti-menu-alt"></i></a></li>
                                </ul>
                            </div>
                            <div class="collapse navbar-collapse" id="navbar-menu">
                                <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                                    <li class="dropdown active">
                                        <a href="/laman-contoh">Home</a>
                                    </li>
                                    <li><a href="/#page2">About Me</a></li>
                                    <li><a href="/#page5">Portfolio</a></li>
                                    <li><a href="/#page8">Contact Me</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>   
                        <!-- Start Side Menu -->
                        <div class="side">
                            <a href="#" class="close-side"><i class="ti-close"></i></a>
                            <div class="widget">
                                <div class="widget_title">
                                    <h3>Custom Pagest</h3>
                                </div>
                                <ul class="link">
                                    <li><a href="/#page2">About</a></li>
                                    <li><a href="/#page5">Portfolio</a></li>
                                    <li><a href="/#page8">Contact</a></li>
                                </ul>
                            </div>
                            <div class="instagram_widget">
                                <div class="widget_title"><h3>Instagrams</h3></div>
                                <ul class="insta_thumb">
                                    <li><a href="#" class="insta_effect"><img src="<?php echo get_theme_mod('ig1_nav') ?>" alt=""></a></li>
                                    <li><a href="#" class="insta_effect"><img src="<?php echo get_theme_mod('ig2_nav') ?>" alt=""></a></li>
                                    <li><a href="#" class="insta_effect"><img src="<?php echo get_theme_mod('ig3_nav') ?>" alt=""></a></li>
                                    <li><a href="#" class="insta_effect"><img src="<?php echo get_theme_mod('ig4_nav') ?>" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.Side Menu -->
                        <div class="side-overlay"></div>
                    </nav>
                    <!--/. navigation -->
                    <div class="clearfix"></div>
                </header> <!-- /.header -->