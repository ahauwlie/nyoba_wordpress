<?php 

function nyoba_style(){
	wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'));
	wp_enqueue_style('icofont', get_theme_file_uri('/assets/vendor/icofont/icofont.min.css'));
	wp_enqueue_style('remixicon', get_theme_file_uri('/assets/vendor/remixicon/remixicon.css'));
	wp_enqueue_style('boxicon', get_theme_file_uri('/assets/vendor/boxicons/css/boxicons.min.css'));
	wp_enqueue_style('owl', get_theme_file_uri('/assets/vendor/owl.carousel/assets/owl.carousel.min.css'));
	wp_enqueue_style('venobox', get_theme_file_uri('/assets/vendor/venobox/venobox.css'));
	wp_enqueue_style('pp', get_theme_file_uri('/assets/vendor/page-pilling/jquery.pagepiling.css'));
	wp_enqueue_style('justifiedGallery', get_theme_file_uri('/assets/vendor/gallery/justifiedGallery.css'));
	wp_enqueue_style('style', get_theme_file_uri('/assets/css/template_backup.css'));
	wp_enqueue_script('unpkg', get_theme_file_uri('/assets/unpkg.com/%40lottiefiles/lottie-player%40latest/dist/lottie-player.js'));
	//script
	wp_enqueue_script('jquery', get_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), [], '1.0', true);
	wp_enqueue_script('bmin', get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), [], '1.0', true);
	wp_enqueue_script('easing', get_theme_file_uri('/assets/vendor/jquery.easing/jquery.easing.min.js'), [], '1.0', true);
	wp_enqueue_script('waypoints', get_theme_file_uri('/assets/vendor/waypoints/jquery.waypoints.min.js'), [], '1.0', true);
	wp_enqueue_script('counterup', get_theme_file_uri('/assets/vendor/counterup/counterup.min.js'), [], '1.0', true);
	wp_enqueue_script('owlce', get_theme_file_uri('/assets/vendor/owl.carousel/owl.carousel.min.js'), [], '1.0', true);
	wp_enqueue_script('isotope', get_theme_file_uri('/assets/vendor/isotope-layout/isotope.pkgd.min.js'), [], '1.0', true);
	wp_enqueue_script('veno', get_theme_file_uri('/assets/vendor/venobox/venobox.js'), [], '1.0', true);
	wp_enqueue_script('probar', get_theme_file_uri('/assets/js/progressbar.js'), [], '1.0', true);
	wp_enqueue_script('waypage', get_theme_file_uri('/assets/vendor/waypoints/waypoints.menu.pagepilling.min.js'), [], '1.0', true);
	wp_enqueue_script('jquerypp', get_theme_file_uri('/assets/vendor/page-pilling/jquery.pagepiling.js'), [], '1.0', true);
	wp_enqueue_script('jqueryjg', get_theme_file_uri('/assets/vendor/gallery/jquery.justifiedGallery.js'), [], '1.0', true);
	wp_enqueue_script('mainjs', get_theme_file_uri('/assets/js/main.js'), [], '1.0', true);
	wp_enqueue_script('mainthree', get_theme_file_uri('/assets/js/main-v-three.js'), [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'nyoba_style');

//NAVBAR
function home_customize($wp_customize){
	$wp_customize->add_section('home_setting_1', array(
		'title' => 'Header atas'
	));
	$wp_customize->add_setting('logo_home', array(
		'default' => 'RetroCactus'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'logo_control', array(
		'label' => 'Logo',
		'section' => 'home_setting_1',
		'settings' => 'logo_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('kontak_home', array(
		'default' => '+62 895-1405-5817'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kontak_control', array(
		'label' => 'Nomer Hp',
		'section' => 'home_setting_1',
		'settings' => 'kontak_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('email_home', array(
		'default' => 'ahauwlie@gmail.com'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email_control', array(
		'label' => 'Email',
		'section' => 'home_setting_1',
		'settings' => 'email_home',
		'type' => 'text'
	)));
}
add_action('customize_register', 'home_customize');

//HALAMAN1
function home1_customize($wp_customize){
	$wp_customize->add_section('home_setting_2', array(
		'title' => 'Home Edit'
	));
	$wp_customize->add_setting('myname_home', array(
		'default' => 'Hi, my name is'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'myname_control', array(
		'label' => 'Name_1',
		'section' => 'home_setting_2',
		'settings' => 'myname_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('myname2_home', array(
		'default' => 'Jeniffer'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'myname2_control', array(
		'label' => 'Name_2',
		'section' => 'home_setting_2',
		'settings' => 'myname2_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('description_home', array(
		'default' => 'Founder of Geeknius. Been more than 7 years in this industry. My background is IT education and self-taught web designing skills.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des_control', array(
		'label' => 'Description',
		'section' => 'home_setting_2',
		'settings' => 'description_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('button_home', array(
		'default' => 'show case'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'button_control', array(
		'label' => 'button title',
		'section' => 'home_setting_2',
		'settings' => 'button_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('bot_home', array(
		'default' => 'TRUSTED BY EXPERTS'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bot_control', array(
		'label' => 'Bottom text',
		'section' => 'home_setting_2',
		'settings' => 'bot_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('sidetext_home', array(
		'default' => "I'm Fullstack Designer"
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'st_control', array(
		'label' => 'Sidetext',
		'section' => 'home_setting_2',
		'settings' => 'sidetext_home',
		'type' => 'text'
	)));
	$wp_customize->add_setting('butbot_home', array(
		'default' => "My Work"
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bt_control', array(
		'label' => 'Pink Button',
		'section' => 'home_setting_2',
		'settings' => 'butbot_home',
		'type' => 'text'
	)));
	//INI BUAT FOTO
	$wp_customize->add_setting('profile_pic', array(
        'default-image' => get_template_directory_uri() . 'https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80',
        'transport'     => 'refresh',
        'height'        => 905,
        'width'        => 603,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'profile_pic_control', array(
        'label' => __('Profile Picture (603wx905h)', 'themeRemax'),
        'section' => 'home_setting_2',
        'settings' => 'profile_pic',
    )));
    $wp_customize->add_setting('logo1', array(
        'default-image' => get_template_directory_uri() . '/assets/img/logo-1.svg',
        'transport'     => 'refresh',
        'height'        => 34,
        'width'        => 144,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo1_control', array(
        'label' => __('Logo_1 (144wx34h)', 'themeRemax'),
        'section' => 'home_setting_2',
        'settings' => 'logo1',
    )));
    $wp_customize->add_setting('logo2', array(
        'default-image' => get_template_directory_uri() . '/assets/img/logo-2.svg',
        'transport'     => 'refresh',
        'height'        => 34,
        'width'        => 144,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo2_control', array(
        'label' => __('Logo_2 (144wx34h)', 'themeRemax'),
        'section' => 'home_setting_2',
        'settings' => 'logo2',
    )));
    $wp_customize->add_setting('logo3', array(
        'default-image' => get_template_directory_uri() . '/assets/img/logo-3.svg',
        'transport'     => 'refresh',
        'height'        => 34,
        'width'        => 144,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo3_control', array(
        'label' => __('Logo_3 (144wx34h)', 'themeRemax'),
        'section' => 'home_setting_2',
        'settings' => 'logo3',
    )));
    $wp_customize->add_setting('logo4', array(
        'default-image' => get_template_directory_uri() . '/assets/img/logo-5.svg',
        'transport'     => 'refresh',
        'height'        => 34,
        'width'        => 144,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo4_control', array(
        'label' => __('Logo_4 (144wx34h)', 'themeRemax'),
        'section' => 'home_setting_2',
        'settings' => 'logo4',
    )));
    $wp_customize->add_setting('logo5', array(
        'default-image' => get_template_directory_uri() . '/assets/img/logo-7.svg',
        'transport'     => 'refresh',
        'height'        => 34,
        'width'        => 144,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo5_control', array(
        'label' => __('Logo_5 (144wx34h)', 'themeRemax'),
        'section' => 'home_setting_2',
        'settings' => 'logo5',
    )));
}
add_action('customize_register', 'home1_customize');

//HALAMAN2
function halaman2($wp_customize){
	$wp_customize->add_section('home_halaman2', array(
		'title' => 'Halaman 2 Edit'
	));
	$wp_customize->add_setting('wwc', array(
		'default' => 'What We Can Do For You.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wwc_control', array(
		'label' => 'Title',
		'section' => 'home_halaman2',
		'settings' => 'wwc',
		'type' => 'text'
	)));
	$wp_customize->add_setting('subtitle', array(
		'default' => 'SERVICES'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sb_control', array(
		'label' => 'Category',
		'section' => 'home_halaman2',
		'settings' => 'subtitle',
		'type' => 'text'
	)));
	$wp_customize->add_setting('desc', array(
		'default' => 'It doesn’t matter how great your product or service is if your copy does not captivate your audience.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'desc_control', array(
		'label' => 'Description',
		'section' => 'home_halaman2',
		'settings' => 'desc',
		'type' => 'text'
	)));
	//kotak pertama
	$wp_customize->add_setting('judul1', array(
		'default' => 'Research'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'judul1_control', array(
		'label' => 'Kotak 1',
		'section' => 'home_halaman2',
		'settings' => 'judul1',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des1', array(
		'default' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des1_control', array(
		'label' => 'Kotak 1 desc',
		'section' => 'home_halaman2',
		'settings' => 'des1',
		'type' => 'text'
	)));
	$wp_customize->add_setting('icon1', array(
		'default' => 'ri-cloud-off-line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'icon1_control', array(
		'label' => 'Kotak 1 Icon',
		'section' => 'home_halaman2',
		'description' => __( 'buka www.remixicon.com truss pilih iconnya, kalo udah bisa copy paste dalam petiknya => *ri-cloud-off-line*' ),
		'settings' => 'icon1',
		'type' => 'text'
	)));
	//kotak kedua
	$wp_customize->add_setting('judul2', array(
		'default' => 'Write'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'judul2_control', array(
		'label' => 'Kotak 2',
		'section' => 'home_halaman2',
		'settings' => 'judul2',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des2', array(
		'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des2_control', array(
		'label' => 'Kotak 2 desc',
		'section' => 'home_halaman2',
		'settings' => 'des2',
		'type' => 'text'
	)));
	$wp_customize->add_setting('icon2', array(
		'default' => 'ri-cloud-off-line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'icon2_control', array(
		'label' => 'Kotak 2 Icon',
		'section' => 'home_halaman2',
		'description' => __( 'buka www.remixicon.com truss pilih iconnya, kalo udah bisa copy paste dalam petiknya => *ri-cloud-off-line*' ),
		'settings' => 'icon2',
		'type' => 'text'
	)));
	//kotak ketiga
	$wp_customize->add_setting('judul3', array(
		'default' => 'Develope'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'judul3_control', array(
		'label' => 'Kotak 3',
		'section' => 'home_halaman2',
		'settings' => 'judul3',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des3', array(
		'default' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des3_control', array(
		'label' => 'Kotak 3 desc',
		'section' => 'home_halaman2',
		'settings' => 'des3',
		'type' => 'text'
	)));
	$wp_customize->add_setting('icon3', array(
		'default' => 'ri-cloud-off-line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'icon3_control', array(
		'label' => 'Kotak 3 Icon',
		'section' => 'home_halaman2',
		'description' => __( 'buka www.remixicon.com truss pilih iconnya, kalo udah bisa copy paste dalam petiknya => *ri-cloud-off-line*' ),
		'settings' => 'icon3',
		'type' => 'text'
	)));
	//kotak keempat
	$wp_customize->add_setting('judul4', array(
		'default' => 'Promote'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'judul4_control', array(
		'label' => 'Kotak 4',
		'section' => 'home_halaman2',
		'settings' => 'judul4',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des4', array(
		'default' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des4_control', array(
		'label' => 'Kotak 4 desc',
		'section' => 'home_halaman2',
		'settings' => 'des4',
		'type' => 'text'
	)));
	$wp_customize->add_setting('icon4', array(
		'default' => 'ri-cloud-off-line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'icon4_control', array(
		'label' => 'Kotak 4 Icon',
		'section' => 'home_halaman2',
		'description' => __( 'buka www.remixicon.com truss pilih iconnya, kalo udah bisa copy paste dalam petiknya => *ri-cloud-off-line*' ),
		'settings' => 'icon4',
		'type' => 'text'
	)));
}
add_action('customize_register', 'halaman2');

//HALAMAN3
function halaman3($wp_customize){
	$wp_customize->add_section('home_halaman3', array(
		'title' => 'Halaman 3 Edit'
	));
	$wp_customize->add_setting('ORP_1', array(
		'default' => 'Our Recent'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ORP_1_control', array(
		'label' => 'Title_1',
		'section' => 'home_halaman3',
		'settings' => 'ORP_1',
		'type' => 'text'
	)));
	$wp_customize->add_setting('ORP2_1', array(
		'default' => 'Project'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ORP2_1_control', array(
		'label' => 'Title bawah_1',
		'section' => 'home_halaman3',
		'settings' => 'ORP2_1',
		'type' => 'text'
	)));
	$wp_customize->add_setting('subtitle3_1', array(
		'default' => 'PORTFOLIO'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subtitle3_1_control', array(
		'label' => 'SubTitle_1',
		'section' => 'home_halaman3',
		'settings' => 'subtitle3_1',
		'type' => 'text'
	)));
	$wp_customize->add_setting('descr_1', array(
		'default' => 'It doesn’t matter how great your product or service is if your copy does not captivate your audience'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descr_1_control', array(
		'label' => 'Description_1',
		'section' => 'home_halaman3',
		'settings' => 'descr_1',
		'type' => 'text'
	)));
	$wp_customize->add_setting('utube_1', array(
		'default' => 'https://www.youtube.com/embed/x6dFP32C0jc'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'utube_1_control', array(
		'label' => 'Youtube link_1',
		'section' => 'home_halaman3',
		'settings' => 'utube_1',
		'type' => 'text'
	)));

	$wp_customize->add_setting('ORP_2', array(
		'default' => 'Kartize'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ORP_2_control', array(
		'label' => 'Title_2',
		'section' => 'home_halaman3',
		'settings' => 'ORP_2',
		'type' => 'text'
	)));
	$wp_customize->add_setting('ORP2_2', array(
		'default' => 'Jena'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ORP2_2_control', array(
		'label' => 'Title bawah_2',
		'section' => 'home_halaman3',
		'settings' => 'ORP2_2',
		'type' => 'text'
	)));
	$wp_customize->add_setting('subtitle3_2', array(
		'default' => 'PORTFOLIO'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subtitle3_2_control', array(
		'label' => 'SubTitle_2',
		'section' => 'home_halaman3',
		'settings' => 'subtitle3_2',
		'type' => 'text'
	)));
	$wp_customize->add_setting('descr_2', array(
		'default' => 'It doesn’t matter how great your product or service is if your copy does not captivate your audience'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descr_2_control', array(
		'label' => 'Description_2',
		'section' => 'home_halaman3',
		'settings' => 'descr_2',
		'type' => 'text'
	)));
	$wp_customize->add_setting('utube_2', array(
		'default' => 'https://www.youtube.com/embed/7A_ovYw6pYk'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'utube_2_control', array(
		'label' => 'Youtube link_2',
		'section' => 'home_halaman3',
		'settings' => 'utube_2',
		'type' => 'text'
	)));

	$wp_customize->add_setting('ORP_3', array(
		'default' => 'Ryan'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ORP_3_control', array(
		'label' => 'Title_3',
		'section' => 'home_halaman3',
		'settings' => 'ORP_3',
		'type' => 'text'
	)));
	$wp_customize->add_setting('ORP2_3', array(
		'default' => 'Reynold'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ORP2_3_control', array(
		'label' => 'Title bawah_3',
		'section' => 'home_halaman3',
		'settings' => 'ORP2_3',
		'type' => 'text'
	)));
	$wp_customize->add_setting('subtitle3_3', array(
		'default' => 'PORTFOLIO'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subtitle3_3_control', array(
		'label' => 'SubTitle_3',
		'section' => 'home_halaman3',
		'settings' => 'subtitle3_3',
		'type' => 'text'
	)));
	$wp_customize->add_setting('descr_3', array(
		'default' => 'It doesn’t matter how great your product or service is if your copy does not captivate your audience'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descr_3_control', array(
		'label' => 'Description_3',
		'section' => 'home_halaman3',
		'settings' => 'descr_3',
		'type' => 'text'
	)));
	$wp_customize->add_setting('utube_3', array(
		'default' => 'https://www.youtube.com/embed/F8sN7ijzozU'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'utube_3_control', array(
		'label' => 'Youtube link_3',
		'section' => 'home_halaman3',
		'settings' => 'utube_3',
		'type' => 'text'
	)));
}
add_action('customize_register', 'halaman3');

//HALAMAN4
function halaman4($wp_customize){
	$wp_customize->add_section('home_halaman4', array(
		'title' => 'Halaman 4 Edit'
	));
	$wp_customize->add_setting('exp', array(
		'default' => 'Experience.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'exp_control', array(
		'label' => 'Title',
		'section' => 'home_halaman4',
		'settings' => 'exp',
		'type' => 'text'
	)));
	$wp_customize->add_setting('subtitle4', array(
		'default' => 'WORKING WITH'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subtitle4_control', array(
		'label' => 'Subtitle',
		'section' => 'home_halaman4',
		'settings' => 'subtitle4',
		'type' => 'text'
	)));
	$wp_customize->add_setting('descr2', array(
		'default' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem, It doesn’t matter how great your product or service is if your copy does not captivate your audience.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descr2_control', array(
		'label' => 'Description',
		'section' => 'home_halaman4',
		'settings' => 'descr2',
		'type' => 'text'
	)));
	//kotak pertama
	$wp_customize->add_setting('sub1k', array(
		'default' => 'PRESENT'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub1k_control', array(
		'label' => 'SubTitle 1',
		'section' => 'home_halaman4',
		'settings' => 'sub1k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('tit1k', array(
		'default' => 'Web Designer & Front End'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'tit1k_control', array(
		'label' => 'Title 1',
		'section' => 'home_halaman4',
		'settings' => 'tit1k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des1k', array(
		'default' => 'Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des1k_control', array(
		'label' => 'Description 1',
		'section' => 'home_halaman4',
		'settings' => 'des1k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('ico1', array(
		'default' => 'ri-cloud-off-line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ico1_control', array(
		'label' => 'Kotak 1 Icon',
		'section' => 'home_halaman4',
		'description' => __( 'buka www.remixicon.com truss pilih iconnya, kalo udah bisa copy paste dalam petiknya => *ri-cloud-off-line*' ),
		'settings' => 'ico1',
		'type' => 'text'
	)));
	//kotak kedua
	$wp_customize->add_setting('sub2k', array(
		'default' => 'JAN 2015 - DEC 2018'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub2k_control', array(
		'label' => 'SubTitle 2',
		'section' => 'home_halaman4',
		'settings' => 'sub2k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('tit2k', array(
		'default' => 'Copywriting & UX Researcher'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'tit2k_control', array(
		'label' => 'Title 2',
		'section' => 'home_halaman4',
		'settings' => 'tit2k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des2k', array(
		'default' => 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des2k_control', array(
		'label' => 'Description 2',
		'section' => 'home_halaman4',
		'settings' => 'des2k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('ico2', array(
		'default' => 'ri-cloud-off-line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ico2_control', array(
		'label' => 'Kotak 2 Icon',
		'section' => 'home_halaman4',
		'description' => __( 'buka www.remixicon.com truss pilih iconnya, kalo udah bisa copy paste dalam petiknya => *ri-cloud-off-line*' ),
		'settings' => 'ico2',
		'type' => 'text'
	)));
	//kotak ketiga
	$wp_customize->add_setting('sub3k', array(
		'default' => 'JAN 2015 - DEC 2018'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub3k_control', array(
		'label' => 'SubTitle 3',
		'section' => 'home_halaman4',
		'settings' => 'sub3k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('tit3k', array(
		'default' => 'Graphic Designer & UI Designer'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'tit3k_control', array(
		'label' => 'Title 3',
		'section' => 'home_halaman4',
		'settings' => 'tit3k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des3k', array(
		'default' => 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des3k_control', array(
		'label' => 'Description 3',
		'section' => 'home_halaman4',
		'settings' => 'des3k',
		'type' => 'text'
	)));
	$wp_customize->add_setting('ico3', array(
		'default' => 'ri-cloud-off-line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ico3_control', array(
		'label' => 'Kotak 3 Icon',
		'section' => 'home_halaman4',
		'description' => __( 'buka www.remixicon.com truss pilih iconnya, kalo udah bisa copy paste dalam petiknya => *ri-cloud-off-line*' ),
		'settings' => 'ico3',
		'type' => 'text'
	)));
}
add_action('customize_register', 'halaman4');

//HALAMAN5
function halaman5($wp_customize){
	$wp_customize->add_section('home_halaman5', array(
		'title' => 'Halaman 5 Edit'
	));
	$wp_customize->add_setting('sub_hal5', array(
		'default' => 'SKILLS'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub_hal5_control', array(
		'label' => 'SubTitle',
		'section' => 'home_halaman5',
		'settings' => 'sub_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('title_hal5', array(
		'default' => 'Creative Works'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'title_hal5_control', array(
		'label' => 'Title',
		'section' => 'home_halaman5',
		'settings' => 'title_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des_hal5', array(
		'default' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem, It doesn’t matter how great your product or service is if your copy does not captivate your audience.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des_hal5_control', array(
		'label' => 'Description',
		'section' => 'home_halaman5',
		'settings' => 'des_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('customizer_setting_pdf', array(
        'transport'         => 'refresh'
    ));
    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'pdf_section_control', array(
        'label'             => __('PDF Upload', 'name-theme'),
        'section'           => 'home_halaman5',
        'settings'          => 'customizer_setting_pdf',    
    )));
	//skill_lisa
	$wp_customize->add_setting('sub1R_hal5', array(
		'default' => 'Angular'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub1R_hal5_control', array(
		'label' => 'Subtitle Sebalah Kanan(1)',
		'section' => 'home_halaman5',
		'settings' => 'sub1R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('k1R_hal5', array(
		'default' => '85%'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'k1R_hal5_control', array(
		'label' => 'Persenan(1)',
		'section' => 'home_halaman5',
		'settings' => 'k1R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('sub2R_hal5', array(
		'default' => 'React'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub2R_hal5_control', array(
		'label' => 'Subtitle Sebalah Kanan(2)',
		'section' => 'home_halaman5',
		'settings' => 'sub2R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('k2R_hal5', array(
		'default' => '90%'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'k2R_hal5_control', array(
		'label' => 'Persenan(2)',
		'section' => 'home_halaman5',
		'settings' => 'k2R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('sub3R_hal5', array(
		'default' => 'NodeJS'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub3R_hal5_control', array(
		'label' => 'Subtitle Sebalah Kanan(3)',
		'section' => 'home_halaman5',
		'settings' => 'sub3R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('k3R_hal5', array(
		'default' => '70%'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'k3R_hal5_control', array(
		'label' => 'Persenan(3)',
		'section' => 'home_halaman5',
		'settings' => 'k3R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('sub4R_hal5', array(
		'default' => 'Analytics'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub4R_hal5_control', array(
		'label' => 'Subtitle Sebalah Kanan(4)',
		'section' => 'home_halaman5',
		'settings' => 'sub4R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('k4R_hal5', array(
		'default' => '89%'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'k4R_hal5_control', array(
		'label' => 'Persenan(4)',
		'section' => 'home_halaman5',
		'settings' => 'k4R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('sub5R_hal5', array(
		'default' => 'Management'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub5R_hal5_control', array(
		'label' => 'Subtitle Sebalah Kanan(5)',
		'section' => 'home_halaman5',
		'settings' => 'sub5R_hal5',
		'type' => 'text'
	)));
	$wp_customize->add_setting('k5R_hal5', array(
		'default' => '86%'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'k5R_hal5_control', array(
		'label' => 'Persenan(5)',
		'section' => 'home_halaman5',
		'settings' => 'k5R_hal5',
		'type' => 'text'
	)));
}
add_action('customize_register', 'halaman5');

//halaman6udah make post

//halaman7 belum

//HALAMAN TERAKHIR
function halaman_end($wp_customize){
	$wp_customize->add_section('home_halaman_end', array(
		'title' => 'Halaman TERAKHIR Edit'
	));
	$wp_customize->add_setting('subt', array(
		'default' => 'GET IN TOUCH OUR ONLINE SERVICES'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subt_control', array(
		'label' => 'SubTitle',
		'section' => 'home_halaman_end',
		'settings' => 'subt',
		'type' => 'text'
	)));
	$wp_customize->add_setting('title_end', array(
		'default' => "Ready to get started? Let's create something extraordinary!"
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'title_end_control', array(
		'label' => 'Title',
		'section' => 'home_halaman_end',
		'settings' => 'title_end',
		'type' => 'text'
	)));
	$wp_customize->add_setting('des_end', array(
		'default' => 'Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue..'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'des_end_control', array(
		'label' => 'Description',
		'section' => 'home_halaman_end',
		'settings' => 'des_end',
		'type' => 'text'
	)));
	$wp_customize->add_setting('sub_end', array(
		'default' => 'YOU KNOW TO FIND US'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sub_end_control', array(
		'label' => 'SubTitle2',
		'section' => 'home_halaman_end',
		'settings' => 'sub_end',
		'type' => 'text'
	)));
	$wp_customize->add_setting('kon_end', array(
		'default' => 'Contact.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kon_end_control', array(
		'label' => 'Title 2',
		'section' => 'home_halaman_end',
		'settings' => 'kon_end',
		'type' => 'text'
	)));
	$wp_customize->add_setting('alamat_end', array(
		'default' => 'A108 Adam Street New York,<br> NY 535022.'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'alamat_end_control', array(
		'label' => 'Address',
		'section' => 'home_halaman_end',
		'settings' => 'alamat_end',
		'type' => 'text'
	)));
	$wp_customize->add_setting('email_end', array(
		'default' => 'info@example.com'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email_end_control', array(
		'label' => 'Email',
		'section' => 'home_halaman_end',
		'settings' => 'email_end',
		'type' => 'text'
	)));
	$wp_customize->add_setting('telp_end', array(
		'default' => '+62 895 1405 5817'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'telp_end_control', array(
		'label' => 'No. Handphone',
		'section' => 'home_halaman_end',
		'settings' => 'telp_end',
		'type' => 'text'
	)));
	//background_foto
	$wp_customize->add_setting('background_pic', array(
        'default-image' => get_template_directory_uri() . 'https://images.unsplash.com/photo-1487958449943-2429e8be8625?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80',
        'transport'     => 'refresh',
        'height'        => 483,
        'width'        => 725,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'background_pic_control', array(
        'label' => __('Profile Background (725wx483h)', 'themeRemax'),
        'section' => 'home_halaman_end',
        'settings' => 'background_pic',
    )));
}
add_action('customize_register', 'halaman_end');


function lisa_post_type(){
	register_post_type('slider12', array(
		'public' => true,
		'supports' => array(
			'title'		
		),
		'labels' => array(
			'name' => 'Testimoni_Slider',
			'add_new_item' => 'Tambah baru testimoninya',
			'edit_item' => 'Edit testimoninya dengan nama baru',
			'all_items' => 'All Testi'
		),
		'menu_icon' => 'dashicons-images-alt'
	));
}
add_action('init', 'lisa_post_type');

function lisa_art_type(){
	register_post_type('article', array(
		'public' => true,
		'supports' => array(
			'title'		
		),
		'labels' => array(
			'name' => 'Article',
			'add_new_item' => 'Tambah baru artikelnya',
			'edit_item' => 'Edit artikelinya dengan nama baru',
			'all_items' => 'All ART'
		),
		'menu_icon' => 'dashicons-images-alt'
	));
}
add_action('init', 'lisa_art_type');