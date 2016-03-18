<?php
/**
* Template Name: Portfolio
*/
    get_header();
     ?>

     <?php
     add_image_size( 'headersize', 1920, 1333 );
     $img = rwmb_meta('fgs_header-img', 'type=image&size=headersize');
     $top = rwmb_meta('fgs_header-top');
     $left = rwmb_meta('fgs_header-left');

     foreach ( $img as $image )
             {
                 echo "<div class='container-fluid' id='headerBG' style='background-image: url({$image['url']}); background-attachment: fixed;  background-position: $left $top'></div>";

             }
      ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

 <div class="container" id="portfolio">
      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>


<?php the_content(); ?>

</div>
</div><!-- .entry-content -->

<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
