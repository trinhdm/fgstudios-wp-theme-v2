<?php
// increases php memory allowance for larger images
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


// allows for thumbnails for blog posts
add_theme_support( 'post-thumbnails' );


// [...] for blog posts changes to a custom one
function custom_excerpt_more($more) {
	return ' <span style="font-size: 75%">[..read more]</span>';
}
add_filter('excerpt_more', 'custom_excerpt_more');


// stops wordpress from adding extra lines
remove_filter('the_content', 'wpautop');


// dynamic copyright year for footer
function copyright_yr() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
	$output = '';

	if($copyright_dates) {
			$copyright = "&copy; " . $copyright_dates[0]->firstdate;
			if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
				$copyright .= '-' . $copyright_dates[0]->lastdate;
			}
			$output = $copyright;
		}

		return $output;
}

 ?>
