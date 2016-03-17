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
            <!-- make a META BOX for this -->
            <img src="http://www.foregroundstudios.net/wp-content/uploads/2016/03/CL_Wild2.jpg" style="position: relative; top: 30%; right: 50%;">
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
