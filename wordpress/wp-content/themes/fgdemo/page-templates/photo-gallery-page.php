<?php
/**
* Template Name: Photo Gallery Page Template
*/
    get_header();
     ?>

     <div class="container-fluid" id="headerBG" style="background-image: url('http://www.zastavki.com/pictures/originals/2013/Auto___Honda_Honda_Accord_cars_cities_street_urban_wallpaper_043310_.jpg'); background-attachment: fixed;">
     </div>

     <style type="text/css">

     .entry-title {
        position: absolute;
        margin-top: -65px;
       left: 50%;
       transform: translateX(-50%);
     }
     </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

 <div class="container" id="photo-gallery">
   <div class="row text-center">
     <a href="#">corporate</a> <span>/</span>
     <a href="#">commercial</a> <span>/</span>
     <a href="#">entertainment</a> <span>/</span>
     <a href="#">social</a> <span>/</span>
     <a href="#">graphics</a> <span>/</span>
     <a href="#">all</a>
   </div>

<div class="row">

  <div class="col-md-4 col-sm-4 col-xs-12">

    <div class="overlay">
      <a href="/photo-event-test/">
        <img src="http://inkprince-wp.upstatement.netdna-cdn.com/wp-content/uploads/2014/08/YouTube-Porter.jpg">

        <b>Event Title</b></a><br>
        Minor Description
      </div>
  </div>


  <div class="col-md-4 col-sm-4 col-xs-12">

    <div class="overlay">
      <a href="/photo-event-test/">
        <img src="http://inkprince-wp.upstatement.netdna-cdn.com/wp-content/uploads/2014/08/YouTube-Porter.jpg">

        <b>Event Title</b></a><br>
        Minor Description
      </div>
  </div>



  <div class="col-md-4 col-sm-4 col-xs-12">

    <div class="overlay">
      <a href="/photo-event-test/">
        <img src="http://inkprince-wp.upstatement.netdna-cdn.com/wp-content/uploads/2014/08/YouTube-Porter.jpg">

        <b>Event Title</b></a><br>
        Minor Description
      </div>
  </div>

</div>




<div class="row">

  <div class="col-md-4 col-sm-4 col-xs-12">

    <div class="overlay">
      <a href="/photo-event-test/">
        <img src="http://inkprince-wp.upstatement.netdna-cdn.com/wp-content/uploads/2014/08/YouTube-Porter.jpg">

        <b>Event Title</b></a><br>
        Minor Description
      </div>
  </div>


  <div class="col-md-4 col-sm-4 col-xs-12">

    <div class="overlay">
      <a href="/photo-event-test/">
        <img src="http://inkprince-wp.upstatement.netdna-cdn.com/wp-content/uploads/2014/08/YouTube-Porter.jpg">

        <b>Event Title</b></a><br>
        Minor Description
      </div>
  </div>



  <div class="col-md-4 col-sm-4 col-xs-12">

    <div class="overlay">
      <a href="/photo-event-test/">
        <img src="http://inkprince-wp.upstatement.netdna-cdn.com/wp-content/uploads/2014/08/YouTube-Porter.jpg">

        <b>Event Title</b></a><br>
        Minor Description
      </div>
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
