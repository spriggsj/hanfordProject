<?php

add_action('wp_enqueue_scripts', 'my_style_method');
function my_style_method() {

	//sets it
	wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
	// fires it
	wp_enqueue_style('style'); //enqueue it
}

function theme_add_bootstrap() {
//sets it
	wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	// fires it
	wp_enqueue_style('bootstrap'); //enqueue it

wp_register_style('jasny-bootstrap-css', get_stylesheet_directory_uri() . '/css/jasny-bootstrap.min.css', array(), '3.1.3', 'all');
	// fires it
	wp_enqueue_style('jasny-bootstrap-css'); //enqueue it



}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


add_action('wp_enqueue_scripts', 'my_method');

function my_method() {
    //sets it
	 wp_register_script('custom-scripts', get_stylesheet_directory_uri() . '/min/custom-min.js', true );
	 wp_enqueue_script('custom-scripts'); //enqueue it

	

	wp_register_script('bootstrap-js', get_stylesheet_directory_uri() . '/scripts/bootstrap.min.js', array(), '3.3.6', 'all');
	// fires it
	wp_enqueue_script('bootstrap-js'); //enqueue it	

	wp_register_script('jQuery', get_stylesheet_directory_uri() . '/scripts/jquery-1.11.2.min.js', array(), '1.11.2', 'all');
	// fires it
	wp_enqueue_script('jQuery'); //enqueue it	


}

// Register Custom Navigation Walker
 require_once('wp_bootstrap_navwalker.php');


