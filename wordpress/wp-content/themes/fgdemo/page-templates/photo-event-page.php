<?php
/**
* Template Name:  Event Page - Photos
*/
    get_header();
     ?>


     <?php
     wp_register_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'),'1.1', true);
 		 wp_enqueue_script('slider');

     add_image_size( 'gallerysize', 1920, 1333 );
     $img = rwmb_meta('fgs_photo-event-gallery', 'type=image&size=gallerysize');

     foreach ( $img as $image )
             {

                 $imgGal[] = "{$image['url']}";
                 // print_r(array_values($imgGal));
             }
    ?>

     <script>
     var images = <?php echo '["' . implode('", "', $imgGal) . '"]' ?>;;
     </script>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
      </header>


      <div class="container" id="photo-event">

        <div class="row">
          <div class="col-md-12 text-center">
            <div id="hold">
              <img src="<?php $first = array_values($imgGal)[0];
                        echo "$first"; ?>" id="mainImage"/>
            </div>

            <div id="thumbnails">
              <div class="thumbnailArrows"><i class="fa fa-arrow-left fa-2x" id="leftArrow" /></i>
              </div>
              <div id="thumbGallery">
                <div id="imageContain"></div>
              </div>
              <div class="thumbnailArrows"><i class="fa fa-arrow-right fa-2x" id="rightArrow" /></i>
              </div>
            </div>

          </div>
        </div>

        <div class="row" id="details">
          <div class="col-md-4 col-md-offset-1 col-sm-5 col-xs-12">
            <h2>Event Details</h2>
            <?php echo rwmb_meta('fgs_events-deets'); ?>
          </div>

          <div class="col-md-6 col-sm-7 col-xs-12">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <!-- make a META BOX for this -->
              <?php echo rwmb_meta('fgs_events-desc'); ?>
          </div><!-- .entry-content -->

          <?php comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>

      </div>
    </div>
		</main><!-- #main -->
<!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
