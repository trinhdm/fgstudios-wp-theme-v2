<?php
/**
*  hi
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

     <!-- <div class="container-fluid" id="headerBG" style="background-image: url('http://www.foregroundstudios.net/wp-content/uploads/2016/03/CL_Ocean.jpg'); background-attachment: fixed;  background-position: 0 -270px">
     </div> -->

     <style type="text/css">

     .entry-title {
       position: absolute;
       margin-top: -90px;
       left: 50%;
       transform: translateX(-50%);
       padding: 0;
       background-color: transparent;
       font-size: 20pt;
     }
     </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
