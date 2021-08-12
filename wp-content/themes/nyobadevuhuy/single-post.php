<?php 
/* Template Name: post */
 get_header('single');
?>
                <div class="container">
                    <div class="row">
                        <main class="col-sm-8 content">

                            <?php
                                $slider = new WP_Query(array(
                                  'post_type' => 'post',
                                  'posts_per_page' => -1
                                ));

                                if($slider->have_posts()) :
                                  while($slider->have_posts( )) : $slider->the_post();
                            ?>
                            <div class="post_details_inner">
                                <div class="post_details_block details_block2">
                                    <div class="post-header">
                                        <ul class="list-category">
                                            <li><a class="post-category" href="#"><?php the_field('category_art') ?></a></li>
                                            <li><a class="post-category" href="#"><?php the_field('category2_art') ?></a> </li>
                                        </ul>
                                        <h2><?php the_title(); ?></h2>
                                        <ul class="authar-info">
                                            <li><a href="#" class="link"><?php the_field('uploader_art') ?></a></li>
                                            <li><?php the_field('date_art') ?></li>
                                            <li><a href="#" class="link">25 views</a></li>
                                        </ul>
                                    </div> 
                                    <figure class="social-icon">
                                        <img src="<?php the_field('pic_art') ?>" class="img-responsive" alt=""/>
                                        <div>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="hidden-xs"><i class="fa fa-linkedin"></i></a>
                                            <a href="#" class="hidden-xs"><i class="fa fa-pinterest-p"></i></a>
                                        </div>			
                                    </figure>
                                    <?php the_field('description_art') ?>
                                </div>
                            </div>
                            <?php
                                endwhile;
                              endif;
                              wp_reset_postdata( );
                            ?>


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
                                </div>
                                <!-- /.social -->
                                <div class="blog_time_read"> Reading time: 2 min </div>
                                <!-- /.reading -->
                            </div>
                            <!-- START COMMENT -->
                           <!--  <div class="comments-container">
                                <h3>Comments (3)</h3>
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment-main-level">
                                            <div class="comment-avatar"><img src="<?= get_theme_file_uri('/blog/assets/images/avatar-1.jpg') ?>" alt=""></div>
                                            <div class="comment-box">
                                                <div class="comment-content">
                                                    <div class="comment-header"> <cite class="comment-author">- Mozammel Hoque</cite>
                                                        <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?</p>
                                                    <a href="#"  class="btn btn-default hvr-sweep-to-bottom btn-sm"> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="comments-list reply-list">
                                            <li>
                                                <div class="comment-avatar"><img src="<?= get_theme_file_uri('/blog/assets/images/avatar-2.jpg') ?>" alt=""></div>
                                                <div class="comment-box">
                                                    <div class="comment-content">
                                                        <div class="comment-header"> <cite class="comment-author">- Tahmina Akthr</cite>
                                                            <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?</p>
                                                        <a href="#"  class="btn btn-default hvr-sweep-to-bottom btn-sm"> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment-avatar"><img src="<?= get_theme_file_uri('/blog/assets/images/avatar-1.jpg') ?>" alt=""></div>
                                                <div class="comment-box">
                                                    <div class="comment-content">
                                                        <div class="comment-header"> <cite class="comment-author">- Mozammel Hoque</cite>
                                                            <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?</p>
                                                        <a href="#"  class="btn btn-default hvr-sweep-to-bottom btn-sm"> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment-main-level">
                                            <div class="comment-avatar"><img src="<?= get_theme_file_uri('/blog/assets/images/avatar-2.jpg') ?>" alt=""></div>
                                            <div class="comment-box">
                                                <div class="comment-content">
                                                    <div class="comment-header"> <cite class="comment-author">- Tahmina Akthr</cite>
                                                        <time datetime="2012-10-27" class="comment-datetime">25 October 2016 at 12.27 pm</time>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?</p>
                                                    <a href="#"  class="btn btn-default hvr-sweep-to-bottom btn-sm"> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- END OF /. COMMENT -->
                            <!-- START COMMENTS FORMS -->
                            <!-- <form class="comment-form" action="#" method="post">
                                <h3><strong>Leave</strong> a Comment</h3>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="name"> Your Name (required)</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name*">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="email"> Your Email (required)</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Your email address here">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="email">Subject</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Write subject here">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">message</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Comment*" rows="7"></textarea>
                                </div>
                                <a href="#" class="btn btn-default hvr-sweep-to-bottom"> Submit</a>
                            </form> -->
                            <!-- END OF /. COMMENTS FORMS -->

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
            </div><!-- /. instagram -->
        </div>
        <footer>
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
    </body>
</html>