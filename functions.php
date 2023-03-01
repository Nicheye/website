<?php 

add_action( 'wp_enqueue_scripts',function () {
	// подключаем файл стилей темы
	wp_enqueue_style( 'pop-up', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css');
    wp_enqueue_style( 'awesome-font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
    wp_enqueue_style( 'normalize', get_template_directory_uri() . 'assets/resources/normalize.css');
    wp_enqueue_style( 'font', get_template_directory_uri() . '/assets/resources/font.css');
    wp_enqueue_style( 'carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css');
    wp_enqueue_style( 'carousel-default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css');
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script('main',get_template_directory_uri() . '/assets/js/script.js',array('jquery'), 'null',true);
    wp_enqueue_script('wow','https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js',array('jquery'), 'null',true);
    wp_enqueue_script('owlcarousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js',array('jquery'), 'null',true);
    wp_enqueue_script('maginific','https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js',array('jquery'), 'null',true);
});
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>