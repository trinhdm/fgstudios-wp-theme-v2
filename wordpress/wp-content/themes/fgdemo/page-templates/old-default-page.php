<?php
/**
 * /**
 * Template Name: OLD DEFAULT PAGE Template
 *
 * use this in case anything breaks
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fgdemo
 */
if(is_front_page())
{
    get_header('home');
}
else if(is_page('About Foreground')){
    get_header('about');
}
else if(is_page('Contact Us')){
    get_header('contact');
}
else if(is_page('Videography Services') && ('Photography Services')){
    get_header('services');
}
else if(is_page('Photo Gallery') && ('Video Gallery')){
    get_header('gallery');
}
else
{
    get_header();
} ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
