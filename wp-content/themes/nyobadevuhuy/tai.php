<?php 
/* Template Name: Article */
 get_header('single');
?>

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
                <div class="featured-news">
                    <div class="container">
                        <div class="row m_l_r">
                            <div id="featured-owl" class="owl-carousel owl-theme">
                                <div class="item">
                                    <article class="featured-post">
                                        <div class="featured-thumb">
                                            <img src="<?= get_theme_file_uri('/blog/assets/images/featured-1.jpg') ?>" class="img-responsive" alt="">
                                        </div>
                                        <!-- /.featured-image -->
                                        <div class="featured-body">
                                            <div class="article-icon">
                                                <i class="ti-pin-alt"></i>
                                            </div>
                                            <!-- /.featured-icon -->
                                            <h2 class="article-title">
                                                <a href="#"> Saatchi Selfies</a>
                                            </h2>
                                            <!-- /.featured-title -->
                                            <ul class="authar-info">
                                                <li class="date"><a href="#">9th May 2017</a></li>
                                                <li class="authar"><a href="#">By Naeem</a></li>
                                            </ul>
                                            <!-- /.featured-meta -->
                                            <div class="article-actions">
                                                <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                            </div>
                                            <!-- /.article-actions -->
                                        </div>
                                        <!-- /.featured-body -->
                                    </article>
                                    <!-- /.featured -->
                                </div>
                                <div class="item">
                                    <article class="featured-post">
                                        <div class="featured-thumb">
                                            <img src="<?= get_theme_file_uri('/blog/assets/images/featured-2.jpg') ?>" class="img-responsive" alt="">
                                        </div>
                                        <!-- /.featured-image -->
                                        <div class="featured-body">
                                            <div class="article-icon">
                                                <i class="ti-pin-alt"></i>
                                            </div>
                                            <!-- /.featured-icon -->
                                            <h2 class="article-title">
                                                <a href="#"> Saatchi Selfies</a>
                                            </h2>
                                            <!-- /.featured-title -->
                                            <ul class="authar-info">
                                                <li class="date"><a href="#">9th May 2017</a></li>
                                                <li class="authar"><a href="#">By Naeem</a></li>
                                            </ul>
                                            <!-- /.featured-meta -->
                                            <div class="article-actions">
                                                <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                            </div>
                                            <!-- /.article-actions -->
                                        </div>
                                        <!-- /.featured-body -->
                                    </article>
                                    <!-- /.featured -->
                                </div>
                                <div class="item">
                                    <article class="featured-post">
                                        <div class="featured-thumb">
                                            <img src="<?= get_theme_file_uri('/blog/assets/images/featured-3.jpg') ?>" class="img-responsive" alt="">
                                        </div>
                                        <!-- /.featured-image -->
                                        <div class="featured-body">
                                            <div class="article-icon">
                                                <i class="ti-pin-alt"></i>
                                            </div>
                                            <!-- /.featured-icon -->
                                            <h2 class="article-title">
                                                <a href="#"> Saatchi Selfies</a>
                                            </h2>
                                            <!-- /.featured-title -->
                                            <ul class="authar-info">
                                                <li class="date"><a href="#">9th May 2017</a></li>
                                                <li class="authar"><a href="#">By Naeem</a></li>
                                            </ul>
                                            <!-- /.featured-meta -->
                                            <div class="article-actions">
                                                <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                            </div>
                                            <!-- /.article-actions -->
                                        </div>
                                        <!-- /.featured-body -->
                                    </article>
                                    <!-- /.featured -->
                                </div>
                                <div class="item">
                                    <article class="featured-post">
                                        <div class="featured-thumb">
                                            <img src="<?= get_theme_file_uri('/blog/assets/images/featured-4.jpg') ?>" class="img-responsive" alt="">
                                        </div>
                                        <!-- /.featured-image -->
                                        <div class="featured-body">
                                            <div class="article-icon">
                                                <i class="ti-pin-alt"></i>
                                            </div>
                                            <!-- /.featured-icon -->
                                            <h2 class="article-title">
                                                <a href="#"> Saatchi Selfies</a>
                                            </h2>
                                            <!-- /.featured-title -->
                                            <ul class="authar-info">
                                                <li class="date"><a href="#">9th May 2017</a></li>
                                                <li class="authar"><a href="#">By Naeem</a></li>
                                            </ul>
                                            <!-- /.featured-meta -->
                                            <div class="article-actions">
                                                <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                            </div>
                                            <!-- /.article-actions -->
                                        </div>
                                        <!-- /.featured-body -->
                                    </article>
                                    <!-- /.featured -->
                                </div>
                                <div class="item">
                                    <article class="featured-post">
                                        <div class="featured-thumb">
                                            <img src="<?= get_theme_file_uri('/blog/assets/images/featured-5.jpg') ?>" class="img-responsive" alt="">
                                        </div>
                                        <!-- /.featured-image -->
                                        <div class="featured-body">
                                            <div class="article-icon">
                                                <i class="ti-pin-alt"></i>
                                            </div>
                                            <!-- /.featured-icon -->
                                            <h2 class="article-title">
                                                <a href="#"> Saatchi Selfies</a>
                                            </h2>
                                            <!-- /.featured-title -->
                                            <ul class="authar-info">
                                                <li class="date"><a href="#">9th May 2017</a></li>
                                                <li class="authar"><a href="#">By Naeem</a></li>
                                            </ul>
                                            <!-- /.featured-meta -->
                                            <div class="article-actions">
                                                <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                            </div>
                                            <!-- /.article-actions -->
                                        </div>
                                        <!-- /.featured-body -->
                                    </article>
                                    <!-- /.featured -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="assurance_title">
                                <!-- <h2>Hello - <span>Welcome to Myself</span> WordPress Bloge Theme</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has </p> -->
                                <?php echo get_theme_mod('welcome_nav') ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.end of assurance title -->
                <div class="container">
                    <div class="row">
                        <main class="col-sm-8 content">
                            <div class="post grid_post">
                                <div class="grid_post_thumb">
                                    <a href="#" class="thumb-overlay">
                                        <figure><img src="<?= get_theme_file_uri('/blog/assets/images/blog-post-1.jpg') ?>" class="img-responsive" alt=""> </figure>
                                        <div class="thumb-content"><div><h4 class="link">Continue Reading <i class="fa fa-angle-right"></i></h4></div></div>
                                    </a><!-- /.image -->
                                    <div class="social-likes social-likes_single" data-counters="no" data-single-title="">
                                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                                        <div class="twitter" title="Share link on Twitter">Twitter</div>
                                        <div class="plusone" title="Share link on Google+">Google+</div>
                                        <div class="pinterest" title="Share image on Pinterest" data-media="">Pinterest</div>
                                    </div><!-- /.share button -->
                                </div>
                                <div class="post_info">
                                    <div class="post_header">
                                        <div class="post_cat">
                                            <ul>
                                                <li>FEATURED-POST  </li>
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div><!-- /.post category -->
                                        <h3 class="post_title">
                                            <a href="#">In id eros vitae eros facilisis molestie.</a>
                                        </h3><!-- /. post title -->
                                        <ul class="authar-info">
                                            <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                        </ul><!-- /.authar info -->
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making 
                                        it look like readable English. Many desktop publishing packages </p>
                                    <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                </div>
                                <div class="bottomBlog">
                                    <div class="blog_social"> Share:
                                        <div class="blog_social_icon">
                                            <div class="custom_images">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-stumbleupon"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.social -->
                                    <div class="blog_time_read"> Reading time: 2 min </div><!-- /.reading time -->
                                </div>
                            </div><!-- /.grid post -->
                            <div class="post grid_post">
                                <div class="grid_post_thumb">
                                    <a href="#" class="thumb-overlay">
                                        <figure><img src="<?= get_theme_file_uri('/blog/assets/images/blog-post-2.jpg') ?>" class="img-responsive" alt=""> </figure>
                                        <div class="thumb-content"><div><h4 class="link">Continue Reading <i class="fa fa-angle-right"></i></h4></div></div>
                                    </a><!-- /.image -->
                                    <div class="social-likes social-likes_single" data-counters="no" data-single-title="">
                                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                                        <div class="twitter" title="Share link on Twitter">Twitter</div>
                                        <div class="plusone" title="Share link on Google+">Google+</div>
                                        <div class="pinterest" title="Share image on Pinterest" data-media="">Pinterest</div>
                                    </div><!-- /.share button -->
                                </div>
                                <div class="post_info">
                                    <div class="post_header">
                                        <div class="post_cat">
                                            <ul>
                                                <li>FEATURED-POST  </li>
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div><!-- /.post category -->
                                        <h3 class="post_title">
                                            <a href="#">Permanent Link to Plants Will Give You Energy</a>
                                        </h3><!-- /. post title -->
                                        <ul class="authar-info">
                                            <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                        </ul><!-- /.authar info -->
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making 
                                        it look like readable English. Many desktop publishing packages </p>
                                    <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                </div>
                                <div class="bottomBlog">
                                    <div class="blog_social"> Share:
                                        <div class="blog_social_icon">
                                            <div class="custom_images">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-stumbleupon"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.social -->
                                    <div class="blog_time_read"> Reading time: 2 min </div><!-- /.reading time -->
                                </div>
                            </div><!-- /.grid post -->
                            <div class="post grid_post">
                                <div class="grid_post_thumb">
                                    <a href="#" class="thumb-overlay">
                                        <figure><img src="<?= get_theme_file_uri('/blog/assets/images/blog-post-06-1170x1400.jpg') ?>" class="img-responsive" alt=""> </figure>
                                        <div class="thumb-content"><div><h4 class="link">Continue Reading <i class="fa fa-angle-right"></i></h4></div></div>
                                    </a><!-- /.image -->
                                    <div class="social-likes social-likes_single" data-counters="no" data-single-title="">
                                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                                        <div class="twitter" title="Share link on Twitter">Twitter</div>
                                        <div class="plusone" title="Share link on Google+">Google+</div>
                                        <div class="pinterest" title="Share image on Pinterest" data-media="">Pinterest</div>
                                    </div><!-- /.share button -->
                                </div>
                                <div class="post_info">
                                    <div class="post_header">
                                        <div class="post_cat">
                                            <ul>
                                                <li>FEATURED-POST  </li>
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div><!-- /.post category -->
                                        <h3 class="post_title">
                                            <a href="#">In id eros vitae eros facilisis molestie.</a>
                                        </h3><!-- /. post title -->
                                        <ul class="authar-info">
                                            <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                        </ul><!-- /.authar info -->
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making 
                                        it look like readable English. Many desktop publishing packages </p>
                                    <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                </div>
                                <div class="bottomBlog">
                                    <div class="blog_social"> Share:
                                        <div class="blog_social_icon">
                                            <div class="custom_images">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-stumbleupon"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.social -->
                                    <div class="blog_time_read"> Reading time: 2 min </div><!-- /.reading time -->
                                </div>
                            </div><!-- /.grid post -->
                            <div class="post grid_post">
                                <div class="grid_post_thumb">
                                    <a href="#" class="thumb-overlay">
                                        <figure><img src="<?= get_theme_file_uri('/blog/assets/images/blog-post-3.jpg') ?>" class="img-responsive" alt=""> </figure>
                                        <div class="thumb-content"><div><h4 class="link">Continue Reading <i class="fa fa-angle-right"></i></h4></div></div>
                                    </a><!-- /.image -->
                                    <div class="social-likes social-likes_single" data-counters="no" data-single-title="">
                                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                                        <div class="twitter" title="Share link on Twitter">Twitter</div>
                                        <div class="plusone" title="Share link on Google+">Google+</div>
                                        <div class="pinterest" title="Share image on Pinterest" data-media="">Pinterest</div>
                                    </div><!-- /.share button -->
                                </div>
                                <div class="post_info">
                                    <div class="post_header">
                                        <div class="post_cat">
                                            <ul>
                                                <li>FEATURED-POST  </li>
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div><!-- /.post category -->
                                        <h3 class="post_title">
                                            <a href="#">In id eros vitae eros facilisis molestie.</a>
                                        </h3><!-- /. post title -->
                                        <ul class="authar-info">
                                            <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                        </ul><!-- /.authar info -->
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making 
                                        it look like readable English. Many desktop publishing packages </p>
                                    <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                </div>
                                <div class="bottomBlog">
                                    <div class="blog_social"> Share:
                                        <div class="blog_social_icon">
                                            <div class="custom_images">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-stumbleupon"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.social -->
                                    <div class="blog_time_read"> Reading time: 2 min </div><!-- /.reading time -->
                                </div>
                            </div><!-- /.grid post -->
                            <div class="post grid_post">
                                <div class="grid_post_thumb">
                                    <a href="#" class="thumb-overlay">
                                        <figure><img src="<?= get_theme_file_uri('/blog/assets/images/blog-post-4.jpg') ?>" class="img-responsive" alt=""> </figure>
                                        <div class="thumb-content"><div><h4 class="link">Continue Reading <i class="fa fa-angle-right"></i></h4></div></div>
                                    </a><!-- /.image -->
                                    <div class="social-likes social-likes_single" data-counters="no" data-single-title="">
                                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                                        <div class="twitter" title="Share link on Twitter">Twitter</div>
                                        <div class="plusone" title="Share link on Google+">Google+</div>
                                        <div class="pinterest" title="Share image on Pinterest" data-media="">Pinterest</div>
                                    </div><!-- /.share button -->
                                </div>
                                <div class="post_info">
                                    <div class="post_header">
                                        <div class="post_cat">
                                            <ul>
                                                <li>FEATURED-POST  </li>
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div><!-- /.post category -->
                                        <h3 class="post_title">
                                            <a href="#">In id eros vitae eros facilisis molestie.</a>
                                        </h3><!-- /. post title -->
                                        <ul class="authar-info">
                                            <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                        </ul><!-- /.authar info -->
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making 
                                        it look like readable English. Many desktop publishing packages </p>
                                    <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                </div>
                                <div class="bottomBlog">
                                    <div class="blog_social"> Share:
                                        <div class="blog_social_icon">
                                            <div class="custom_images">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-stumbleupon"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.social -->
                                    <div class="blog_time_read"> Reading time: 2 min </div><!-- /.reading time -->
                                </div>
                            </div><!-- /.grid post -->
                            <div class="post grid_post">
                                <div class="audio_content lg">
                                    <iframe height="300" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/373131704&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                </div><!-- audio content -->
                                <div class="post_info">
                                    <div class="post_header">
                                        <div class="post_cat">
                                            <ul>
                                                <li>FEATURED-POST  </li>
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div><!-- /.post category -->
                                        <h3 class="post_title">
                                            <a href="#">In id eros vitae eros facilisis molestie.</a>
                                        </h3><!-- /. post title -->
                                        <ul class="authar-info">
                                            <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                        </ul><!-- /.authar info -->
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making 
                                        it look like readable English. Many desktop publishing packages </p>
                                    <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                </div>
                                <div class="bottomBlog">
                                    <div class="blog_social"> Share:
                                        <div class="blog_social_icon">
                                            <div class="custom_images">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-stumbleupon"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.social -->
                                    <div class="blog_time_read"> Reading time: 2 min </div><!-- /.reading time -->
                                </div>
                            </div><!-- /.grid post -->
                            <div class="post grid_post">
                                <div class="grid_post_thumb">
                                    <a href="#" class="thumb-overlay">
                                        <figure><img src="<?= get_theme_file_uri('/blog/assets/images/blog-post-5.jpg') ?>" class="img-responsive" alt=""> </figure>
                                        <div class="thumb-content"><div><h4 class="link">Continue Reading <i class="fa fa-angle-right"></i></h4></div></div>
                                    </a><!-- /.image -->
                                    <div class="social-likes social-likes_single" data-counters="no" data-single-title="">
                                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                                        <div class="twitter" title="Share link on Twitter">Twitter</div>
                                        <div class="plusone" title="Share link on Google+">Google+</div>
                                        <div class="pinterest" title="Share image on Pinterest" data-media="">Pinterest</div>
                                    </div><!-- /.share button -->
                                </div>
                                <div class="post_info">
                                    <div class="post_header">
                                        <div class="post_cat">
                                            <ul>
                                                <li>FEATURED-POST  </li>
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div><!-- /.post category -->
                                        <h3 class="post_title">
                                            <a href="#">In id eros vitae eros facilisis molestie.</a>
                                        </h3><!-- /. post title -->
                                        <ul class="authar-info">
                                            <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                        </ul><!-- /.authar info -->
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of 
                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making 
                                        it look like readable English. Many desktop publishing packages </p>
                                    <a href="#" class="btn btn-default hvr-sweep-to-bottom">View Post</a>
                                </div>
                                <div class="bottomBlog">
                                    <div class="blog_social"> Share:
                                        <div class="blog_social_icon">
                                            <div class="custom_images">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-stumbleupon"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- /.social -->
                                    <div class="blog_time_read"> Reading time: 2 min </div><!-- /.reading time -->
                                </div>
                            </div><!-- /.grid post -->
                            <nav class="navigation pagination">
                                <div class="nav-links">
                                    <a class="prev page-numbers" href="#">previous</a>
                                    <span class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="next page-numbers" href="#">next</a>	
                                </div>
                            </nav><!-- /. pagination -->
                        </main>
                        <aside class="col-sm-4 rightSidebar p_l_50">
                            <form class="search-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...." name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <!-- /. search widget -->
                            <div class="latest_post">
                                <div class="widget_title">
                                    <h3>Latest Posts</h3>
                                </div>
                                <div class="news-list">
                                    <div class="news-list-item">
                                        <div class="img-wrapper">
                                            <a href="#" class="thumb">
                                                <img src="<?= get_theme_file_uri('/blog/assets/images/115x85-1.jpg') ?>" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="p-post">
                                            <h4><a href="#">It is a long established fact that a reader</a></h4>
                                            <ul class="authar-info">
                                                <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-list-item">
                                        <div class="img-wrapper">
                                            <a href="#" class="thumb">
                                                <img src="<?= get_theme_file_uri('/blog/assets/images/115x85-2.jpg') ?>" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="p-post">
                                            <h4><a href="#">It was popularised in the 1960s with the</a></h4>
                                            <ul class="authar-info">
                                                <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-list-item">
                                        <div class="img-wrapper">
                                            <a href="#" class="thumb">
                                                <img src="<?= get_theme_file_uri('/blog/assets/images/115x85-3.jpg') ?>" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="p-post">
                                            <h4><a href="#">There are many variations of passages.</a></h4>
                                            <ul class="authar-info">
                                                <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news-list-item">
                                        <div class="img-wrapper">
                                            <a href="#" class="thumb">
                                                <img src="<?= get_theme_file_uri('/blog/assets/images/115x85-4.jpg') ?>" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="p-post">
                                            <h4><a href="#">All the Lorem Ipsum generators on the </a></h4>
                                            <ul class="authar-info">
                                                <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.latest post -->
                            <div class="category_widget">
                                <div class="widget_title"><h3>Category</h3></div>
                                <ul class="category-list">
                                    <li class="hvr-sweep-to-bottom"><a href="#">Business <span>12</span></a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="#">Sport <span>26</span></a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="#">LifeStyle <span>55</span></a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="#">Fashion <span>37</span></a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="#">Technology <span>62</span></a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="#">Music <span>10</span></a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="#">Culture <span>43</span></a></li>
                                </ul>
                            </div>
                            <!-- /. category widget -->
                            <div class="add_widget">
                                <img src="<?= get_theme_file_uri('/blog/assets/images/banner2.png') ?>" class="img-responsive center-block" alt="">
                            </div>
                            <!-- /. add widget -->
                            <div class="instagram_widget">
                                <div class="widget_title"><h3>Instagrams</h3></div>
                                <ul class="insta_thumb">
                                    <li><a href="#" class="insta_effect"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram-1.jpg') ?>" alt=""></a></li>
                                    <li><a href="#" class="insta_effect"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram-2.jpg') ?>" alt=""></a></li>
                                    <li><a href="#" class="insta_effect"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram-3.jpg') ?>" alt=""></a></li>
                                    <li><a href="#" class="insta_effect"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram-4.jpg') ?>" alt=""></a></li>
                                </ul>
                            </div>
                            <!-- /. instagram widget -->
                            <div class="tags_inner">
                                <div class="widget_title">
                                    <h3>Tags Clouds</h3>
                                </div>
                                <div class="tags_widget">
                                    <div class="ui tag labels">
                                        <a class="ui label">Beauty</a>
                                        <a class="ui label">summerholidays</a>
                                        <a class="ui label">health</a>
                                        <a class="ui label">superfood</a>
                                        <a class="ui label">yoga</a>
                                        <a class="ui label">travelling</a>
                                        <a class="ui label">sport</a>
                                        <a class="ui label">Katy B</a>
                                        <a class="ui label">Music</a>
                                        <a class="ui label">Lifestyle</a>
                                        <a class="ui label">jamie oliver</a>
                                        <a class="ui label">healthyfood</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /. tags widget -->
                            <div class="fb_like_box">
                                <div class="widget_title"><h3>Facebook</h3></div>
                                <div class="fb-page" data-href="https://www.facebook.com/fatakestono1/" data-tabs="timeline" data-width="290" data-height="212" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/fatakestono1/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fatakestono1/">ফাটাকেস্ট</a></blockquote>
                                </div>
                            </div>
                            <!-- /. facebook like box widget -->
                        </aside>
                    </div>
                </div>   
            </div>
            <div class="ri-grid">
                <ul>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/1.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/2.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/3.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/4.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/5.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/6.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/7.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/8.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/9.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/10.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/11.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/12.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/13.jpg') ?>" alt=""/></a></li>
                    <li><a href="#"><img src="<?= get_theme_file_uri('/blog/assets/images/instagram/14.jpg') ?>" alt=""/></a></li>
                </ul>
                <a href="http://instagram.com/" target="_blank">
                    <div class="insta-follow-me">
                        <div>
                            <img src="<?= get_theme_file_uri('/blog/assets/images/instagram-icon.png') ?>" alt="">
                            <h5>Follow Me!</h5>
                        </div>
                    </div>
                </a>
            </div><!-- /.instagram -->
        </div>
        <footer class="footer-fixed">
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="popular-post">
                                <div class="widget_title">
                                    <h3>Popular Post</h3>
                                </div>
                                <div class="p-post">
                                    <h4><a href="#">It is a long established fact that a reader will be distracted by  </a></h4>
                                    <ul class="authar-info">
                                        <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                        <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                    </ul>
                                </div>
                                <div class="p-post">
                                    <h4><a href="#">It is a long established fact that a reader will be distracted by  </a></h4>
                                    <ul class="authar-info">
                                        <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                        <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                    </ul>
                                </div>
                                <div class="p-post">
                                    <h4><a href="#">It is a long established fact that a reader will be distracted by  </a></h4>
                                    <ul class="authar-info">
                                        <li class="date"><a href="#"><i class="ti-comment"></i>189 Comment</a></li>
                                        <li class="like"><a href="#"><i class="ti-user"></i>By Naeem</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="add_widget2">
                                <img src="<?= get_theme_file_uri('/blog/assets/images/banner.jpg') ?>" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="twitter-inner">
                                <div class="widget_title">
                                    <h3>Twitter feeds</h3>
                                </div>
                                <ul class="margin-top-60">
                                    <li>
                                        <span><i class="ti-twitter"></i>12 days ago</span>
                                        <a href="#">@Unsplash</a> Typi non habent claritatem insitam est usus legent is iis qui facit. <a href="https://t.co/erenthemeGHTQ">https://t.co/erenthemeGHTQ</a>
                                    </li>
                                    <li>
                                        <span><i class="ti-twitter"></i>10 days ago</span>
                                        <a href="#">@Unsplash</a> Typi non habent claritatem insitam est usus legent is <a href="https://t.co/erenthemeGHTQ">https://t.co/erenthemeGHTQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-cat">
                                <div class="widget_title">
                                    <h3>Category</h3>
                                </div>
                                <ul class="menu-services">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">LifeStyle</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Culture</a></li>
                                    <li><a href="#">Entertainment</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. footer top -->
            <div class="sub-footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="#" class="footer-logo">
                                <!--<i class="ico-logo-footer"></i>-->
                                <img src="<?= get_theme_file_uri('/blog/assets/images/logo.png') ?>" class="img-responsive" alt="">
                            </a>
                            <!-- /.footer-logo -->
                            <div class="footer-copyright">
                                <p>All rights reserved © 2017 Themeqx</p>
                                <p><a href="#">Terms and Conditions of Use</a></p>
                            </div>
                            <!-- /.footer-copyright -->
                            <div class="footer-credits">
                                <p>Design:<a target="_blank" href="#">Themeqx</a></p>
                            </div>
                            <!-- /.footer-credits -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. sub footer -->
        </footer>
        <!-- /.footer -->
        <!-- jQuery -->
        <script src="<?= get_theme_file_uri('/blog/assets/js/jquery.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/bootsnav/bootsnav.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/morphext/morphext.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/macy/macy.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/theia-sticky-sidebar/dist/ResizeSensor.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/theia-sticky-sidebar/dist/theia-sticky-sidebar.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/owl-carousel/owl.carousel.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/social-likes/social-likes.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/unitegallery/js/unitegallery.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/unitegallery/themes/default/ug-theme-default.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/responsiveImageGrid/modernizr.custom.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/responsiveImageGrid/jquery.gridrotator.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/js/jquery.shuffle.min.js') ?>"></script>
        <script src="<?= get_theme_file_uri('/blog/assets/js/custom.js') ?>"></script>

<?php get_footer(); ?>