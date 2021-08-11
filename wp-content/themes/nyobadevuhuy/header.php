<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Geeknius - Creative Personal CV/Resume HTML Template">
  <meta name="author" content="Themesmile">
  <title>Geeknius Bootstrap Template - Index</title>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Hind:wght@400;700&amp;family=Manrope:wght@200;300;400;600;700;800&amp;display=swap"
    rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/page-pilling/jquery.pagepiling.css" rel="stylesheet">
  <link href="assets/vendor/gallery/justifiedGallery.css" rel="stylesheet">
  <link href="assets/css/template.css" rel="stylesheet">
  <script src="../unpkg.com/%40lottiefiles/lottie-player%40latest/dist/lottie-player.js"></script> -->
  
  <?php wp_head(); ?>
</head>

<body class="body-v-three">

  <aside>
    <nav class="nav-menu d-none d-lg-none">
      <div class="header-menu">
        <ul class="social-icon">
          <li class="social"><a href="#"><i class="ri-twitter-line"></i></a></li>
          <li class="social"><a href="#"><i class="ri-instagram-line"></i></a> </li>
          <li class="social"><a href="#"><i class="ri-dribbble-line"></i></a> </li>
        </ul>
      </div>
      <ul id="menu-geeknius" class="menu-geeknius-active">
        <li data-menuanchor="page1"><a href="#page1">Home</a></li>
        <li data-menuanchor="page2"><a href="#page2">Services</a></li>
        <li data-menuanchor="page3"><a href="#page3">Portfolio</a></li>
        <li data-menuanchor="page4"><a href="#page4">Experience</a></li>
        <li data-menuanchor="page5"><a href="#page5">Skills</a></li>
        <li data-menuanchor="page6"><a href="#page6">Testimonials</a></li>
        <li data-menuanchor="page7"><a href="#page7">News</a></li>
        <li data-menuanchor="page8"><a href="#page8">Contact</a></li>


      </ul>
      <div class="footer-menu"><a href="#blog-news">© Themesmile. 2020. <br>All Rights Reserved.</a></div>
    </nav><!-- .nav-menu -->
  </aside>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-v-three">
    <div class="container-fluid d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index-v-3.html">
            <!-- geeknius. -->
            <?php echo get_theme_mod('logo_home') ?>
          </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo-12.svg" alt="" class="class="logo-2"></a>-->
        <ul>
          <li><a href="#"><i class="ri-phone-line"></i><?php echo get_theme_mod('kontak_home') ?></a></li>
          <li><a href="#"><i class="ri-mail-open-line"></i><?php echo get_theme_mod('email_home') ?></a></li>
        </ul>
      </div>
      <div class="nav-submenu d-lg-block d-flex align-items-center justify-content-center align-self-center">
        <ul>
          <li><input class="container_toggle" type="checkbox" id="switch" name="mode" /><label for="switch"></label>
          </li>
        </ul>
      </div>

    </div>
    <div class="social-links">
      <a href="#" class="twitter">Twt.</a>
      <a href="#" class="facebook">Fb.</a>
      <a href="#" class="instagram">Instg.</a>
      <a href="#" class="linkedin">Link.</a>

    </div>
  </header><!-- End Header -->