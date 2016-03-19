<?php
/**
* Template Name: Home Page Template
*
*/
    get_header();
     ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div id="home">
      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <span id="homepage-flag" style="display: none" /></span>


      <!-- HIGHLIGHT REEL -->
      <div class="fullscreen-video">
      </div>


      <!-- WHO WE ARE -->
      <div class="container text-center" id="whoweare">
        <?php echo rwmb_meta('fgs_who-we-are'); ?>
      </div>


      <!-- PHOTO SLIDER -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">


           <?php
              add_image_size( 'slidersize', 1920, 1333 );
              $img = rwmb_meta('fgs_home-slider', 'type=image&size=slidersize');

              foreach ( $img as $image )
                      {
                          $slider[] = "{$image['url']}";
                      }
           ?>

          <div class="item active">
            <img src="<?php $first = array_values($slider)[0];
                      echo "$first"; ?>">
          </div>

          <?php

          foreach ( array_slice($img,1) as $image ) {

                      echo "<div class='item'>
                        <img src='{$image['url']}'>
                      </div>";
                  }
           ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="fa fa-angle-left fa-5x .arrow-place" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="fa fa-angle-right fa-5x .arrow-place" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- end of carousel -->


      <!-- BLOG -->
      <div class="container" id="blog">
        <div class="row">
          <div class="col-md-12" id="blog-header">
            <h1>Foreground News</h1>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <a href="<?php the_permalink() ?>">
                <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354">
              </a>
              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
              <p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
              <p><?php the_excerpt(__('(more…)')); ?>
              </p><p class="entry"></p>

              <?php
                endwhile;
                wp_reset_postdata();
              ?>
          </div>
          <?php wp_reset_query();?>


          <div class="col-md-4 col-sm-12 col-xs-12">
            <?php $the_query = new WP_Query( 'showposts=1 && offset=1' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <a href="<?php the_permalink() ?>">
                <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354">
              </a>
              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
              <p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
              <p><?php the_excerpt(__('(more…)')); ?>
              </p><p class="entry"></p>

              <?php
                endwhile;
                wp_reset_postdata();
              ?>
          </div>
          <?php wp_reset_query();?>


          <div class="col-md-4 col-sm-12 col-xs-12">
            <?php $the_query = new WP_Query( 'showposts=1 && offset=2' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <a href="<?php the_permalink() ?>">
                <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354">
              </a>
              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
              <p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
              <p><?php the_excerpt(__('(more…)')); ?>
              </p><p class="entry"></p>

              <?php
                endwhile;
                wp_reset_postdata();
              ?>
              </div>
              <?php wp_reset_query();?>
        </div>
      </div>


      <!-- TESTIMONIAL / QUOTE -->
      <div class="container quote">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h3><?php echo rwmb_meta('fgs_quote'); ?></h3>

            <span>
              <b><?php echo rwmb_meta('fgs_quote-name'); ?></b></span><br>
              <p><?php echo rwmb_meta('fgs_quote-company'); ?></p>

          </div>
        </div>
      </div>


      <!-- AFFILIATES -->
      <div class="container text-center" id="affiliates">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-4">
            <h2>Our affiliates</h2>

            <?php
            add_image_size( 'affsize', 200, 200 );
            $img = rwmb_meta('fgs_header-img', 'type=image&size=affsize');

            foreach ( $img as $image ) {
                        echo "<img src='{$image['url']}'>";
                    }
             ?>
          </div>
        </div>
      </div>

      <?php the_content(); ?>
    </div><!-- .entry-content -->

      <?php comments_template( '', true ); ?>
      <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
