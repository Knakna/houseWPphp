<?php


define('THEME_ROOT', get_template_directory_uri() );
define('JS_DIR', THEME_ROOT . '/assets/js' );
define('IMG_DIR', THEME_ROOT . './assets/images' );


add_action( 'wp_enqueue_scripts', 'archmove_style' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'init', 'register_post_types' );



function theme_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Главное меню' );
	register_nav_menu( 'footer_menu', 'Нижнее меню' );
}


function archmove_style() {

	wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}

function archmove_scripts() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'swiper-script',  'https://unpkg.com/swiper/swiper-bundle.min.js');

	wp_enqueue_script( 'main-script', JS_DIR . '/script.js', array('jquery'), 'null', true );
}


function register_post_types(){

	add_theme_support('post-thumbnails');

	register_post_type( 'features', [
		'labels' => [
			'name'               => 'Features', // основное название для типа записи
			'singular_name'      => 'Feature', // название для одной записи этого типа
			'add_new'            => 'Добавить feature', // для добавления новой записи
			'add_new_item'       => 'Добавление feature', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование feature', // для редактирования типа записи
			'new_item'           => 'Новый feature', // текст новой записи
			'view_item'          => 'Смотреть feature', // для просмотра записи этого типа.
			'search_items'       => 'Искать feature', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Features', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-star-filled',
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
}


function getFeatures(){
$args = array(
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'features'
) ;

$features= [];



foreach(get_posts($args) as $post ) {


	$feature = (get_fields($post->ID));

	$feature['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );

	$feature['title'] = $post->post_title;
	$feature['text'] = $post->post_content;
	// $feature['add__desc'] = $post->post_add__desc;
	$features[] = $feature;
}

return $features;

}


// print_r(getFeatures());


remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
















// wp_reset_postdata(); // сброс

// return get_posts($args);

// }


// foreach( $posts as $post ){
// 	setup_postdata($post);
//     // формат вывода the_title() ...
// }

// wp_reset_postdata(); // сброс

// 	// $feature = get_fields($post->ID);
	// echo $post->ID;



