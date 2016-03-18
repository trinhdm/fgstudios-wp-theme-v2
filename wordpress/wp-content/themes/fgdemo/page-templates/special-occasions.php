<?php
/**
* Template Name: Special Occasions
*/
    get_header();
     ?>

     <div class="container-fluid" id="headerBG" style="background-image: url('http://www.foregroundstudios.net/wp-content/uploads/2016/03/CL_Megan.jpg'); background-attachment: fixed;   background-position: 0 -270px">
     </div>

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
