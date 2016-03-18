<?php
/**
* Template Name: Services
*/
    get_header();
     ?>


		<main id="main" class="site-main" role="main">

      <div class="container" id="services">
        <div class="row" id="about">
          <div class="col-md-4 col-md-offset-1 col-xs-12 fill">

            <?php
            add_image_size( 'headersize', 1920, 1333 );
            $img = rwmb_meta('fgs_services-img', 'type=image&size=headersize');

            foreach ( $img as $image )
                    {
                        echo "<img src='{$image['url']}'>";

                    }
             ?>

          </div>

          <div class="col-md-6 col-xs-12">
			       <?php
			        while ( have_posts() ) : the_post();
				              get_template_part( 'template-parts/content', 'page' );
				              // If comments are open or we have at least one comment, load up the comment template.
				              if ( comments_open() || get_comments_number() ) :
					                   comments_template();
				              endif;
	            endwhile; // End of the loop.
			        ?>
          </div>
        </div>
      </div>

		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>
