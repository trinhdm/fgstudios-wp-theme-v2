<?php
/**
* Template Name: Home Page Template
*
*/
    get_header();
     ?>

     <style type="text/css">

     .entry-title {
        display: none;
     }
     </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

<span id="homepage-flag" style="display: none" /></span>



        <div class="container text-center" id="video-header">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="http://www.foregroundstudios.net/wp-content/uploads/2016/02/fg-logo-white.png" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="fullscreen-bg">
        </div>

<div class="container text-center" id="whoweare">
<h2>Hello! We are Foreground Studios and we specialize in..</h2>
  <div class="row" id="circles">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <i class="fa fa-camera-retro fa-5x fa-cog circle-icon"></i><br>
        <p class="script">photography</p>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <i class="fa fa-video-camera fa-5x fa-cog circle-icon"></i><br>
        <p class="script">videography</p>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <i class="fa fa-pencil fa-5x fa-cog circle-icon"></i><br>
        <p class="script">..and more!</p>
    </div>
  </div>
  <div class="row">
    <p>Bacon ipsum dolor amet alcatra venison short loin tail kielbasa. Turducken bacon pork ham tenderloin. Shank short ribs alcatra, ground round frankfurter shoulder pancetta t-bone chicken pork chuck ribeye shankle. Prosciutto fatback shoulder jerky t-bone beef ribs.
    </p>
  </div>
</div>



      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_2.jpg?6811766980172868354" alt="Chania">
          </div>

          <div class="item">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354" alt="Chania">
          </div>

          <div class="item">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_4.jpg?6811766980172868354" alt="Flower">
          </div>

          <div class="item">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_5.jpg?6811766980172868354" alt="Flower">
          </div>
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



  <div class="container" id="blog">
    <div class="row">
      <div class="col-md-12" id="blog-header">
              <h1>Foreground News</h1>
            </div>
          </div>

          <div class="row">
      <div class="col-md-12">
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
        </p>
        <p class="entry"></p>

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


    </div>
    </div>
  </div>
</div>

<div class="container quote">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Working with Foreground Studios has been a total pleasure; they are quick to get on to the tasks at hand and always showed a positive attitude towards new and challenging problems. We'll definitely be working with them for the foreseeable future </h3>

      <span>
        <b>Some guy named George</b></span><br>
        <p>From some company in Irvine</p>

    </div>
  </div>
</div>

<div class="container text-center" id="affiliates">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-4">
      <h2>Our affiliates</h2>

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
