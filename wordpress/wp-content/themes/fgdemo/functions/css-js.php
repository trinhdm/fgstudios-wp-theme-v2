<?php

// custom JS
function all_the_js() {
	wp_register_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', 'jquery');
	wp_enqueue_script('custom-js');

	wp_register_script('tubular-js', get_template_directory_uri() . '/assets/js/tubular.js', 'jquery');
	wp_enqueue_script('tubular-js');

	wp_register_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'),'1.1', true);
	wp_enqueue_script('slider');

	wp_register_script('metabox', get_template_directory_uri() . '/assets/js/metabox.js', array('jquery'),'1.1', true);
	wp_enqueue_script('metabox');
}

add_action( 'init', 'all_the_js' );



// font awesome
function enqueue_our_required_stylesheets(){
 wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');



// adds bootstrap to wordpress
function wpt_register_js() {
	wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery');
	wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
	wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );



// registers custom nav menu
$bspath = $_SERVER['DOCUMENT_ROOT'];
$bspath .= "/wp-content/themes/fgdemo/assets/php/wp_bootstrap_navwalker.php";

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

// enables bootstrap navwalker
 require_once($bspath);



 ?>
