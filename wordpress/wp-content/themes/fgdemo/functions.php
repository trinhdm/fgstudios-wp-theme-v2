<?php
/**
 * fgdemo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fgdemo
 */


// php that came with _s theme
require "functions/theme-support.php" ;

// adds custom meta boxes
require "functions/metaboxes.php" ;

// adds custom fixed nav js
require "functions/css-js.php" ;

// all of the back end
require "functions/back-end.php" ;








/**
 * Enqueue scripts and styles.
 */
function fgdemo_scripts() {
	wp_enqueue_style( 'fgdemo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'fgdemo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'fgdemo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fgdemo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
