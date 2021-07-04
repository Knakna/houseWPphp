<?php


define('THEME_ROOT', get_template_directory_uri() );
define('JS_DIR', THEME_ROOT . '/assets/js' );
define('IMG_DIR', THEME_ROOT . './assets/images' );


add_action( 'wp_enqueue_scripts', 'archmove_style' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );



function archmove_style() {

	wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}

function archmove_scripts() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'swiper-script',  'https://unpkg.com/swiper/swiper-bundle.min.js');

	wp_enqueue_script( 'main-script', JS_DIR . '/script.js', array(jquery), 'null', true );
}
