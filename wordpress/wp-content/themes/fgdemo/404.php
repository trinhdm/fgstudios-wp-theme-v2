<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fgdemo
 */

get_header(); ?>

<style type="text/css">

.page-title {
  position: absolute;
  margin-top: -90px;
  left: 50%;
  transform: translateX(-50%);
  padding: 0;
  background-color: transparent;
  font-size: 20pt;
}
</style>


<div class="container-fluid" id="headerBG" style="background-image: url('http://www.foregroundstudios.net/wp-content/uploads/2016/03/CL_Landscape.jpg'); background-attachment: fixed;">
</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fgdemo' ); ?></h1>
				</header><!-- .page-header -->

        <!-- REDIRECTS 404 TO HOMEPAGE -->
        <?php
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".get_bloginfo('url'));
        exit();
        ?>


				<div class="container text-center">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links in the navigation?', 'fgdemo' ); ?></p>

					<?php


						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( fgdemo_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'fgdemo' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'fgdemo' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
