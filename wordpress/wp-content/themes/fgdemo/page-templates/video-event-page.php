<?php
/**
* Template Name: Event Page - Videos
*/
    get_header();
     ?>

     <!-- populates thumbnails for slider - figure out how to do it in php -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
      </header>


      <div class="container" id="photo-event">

        <div class="row">
          <div class="col-md-12 text-center">

            <?php
            // function event_vid_size() {
	          //    return array(
            //       'width' => 950,
            //       'height' => 820
            //     );
            //   }
            // add_filter( 'embed_defaults', 'event_vid_size' );

            $video = rwmb_meta('fgs_yt-events', 'type=oembed');
            $url = get_post_meta( get_the_ID(), 'fgs_yt-events', true );
                  echo "$video";
             ?>

             <script>
             var frame = $('iframe');

             $(window).resize(function () { //put your code in window.resize so that it runs when ever window is resized
                 if ($(window).width() >= 991 && $(window).width() < 1200) {
                   frame.css('width', '776px');
                   frame.css('height', '450px');
                 } else if ($(window).width() >= 1200) {
                   frame.css('width', '948px');
                   frame.css('height', '520px');
                 }
                  else {
                   frame.css('width', '100%');
                 }
               }).resize(); //call resize function

            //  var frame = $('iframe');
             //
            //  if ($(window).width() < 1200) {
            //    alert('Less than 1200');
            //    frame.css('width', '100%');
            //  } else {
            //    frame.css('width', '950px');
            //    frame.css('height', '820px');
            //  }





            //  $(window).resize(function () { //put your code in window.resize so that it runs when ever window is resized
            //      if ($(window).width() < 1200) {
            //        var frame = $('iframe');
            //        frame.css("width", '100%');
            //      }
            //    }).resize(); //call resize function
            //  }
            </script>

          </div>
        </div>

        <div class="row">
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

		</main><!-- #main -->
	</div>
</div>
<!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
