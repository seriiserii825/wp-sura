<?php

require_once __DIR__.'/inc/func.php';
require_once __DIR__.'/inc/carbon-fields/post-meta.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text'.carbon_lang(), 'Text Field' ),
        ) );
}



remove_filter( 'the_content', 'wpautop' );// для контента


add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('custom-style', get_template_directory_uri().'/assets/css/style.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'jquery.easeScroll', get_template_directory_uri() . '/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['jquery'], null, true);
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
}

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	] );
} );

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Language',
		'id'            => "sidebar-language",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '',
		'after_title'   => "",
	) );
}
