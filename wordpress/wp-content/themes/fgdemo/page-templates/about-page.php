<?php
/**
* Template Name: About Us
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

  <div class="container" id="aboutus">

      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

    <div class="row">

       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row about-info">

           <div class="col-md-4 col-sm-12 col-xs-12">
             <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
           </div>

           <div class="col-md-8 col-sm-12 col-xs-12 about-staff">
             <i class="fa fa-camera-retro fa-4x about-fa"></i>
             <h2><?php echo rwmb_meta('fgs_staff-name'); ?></h2>
             <h3><?php echo rwmb_meta('fgs_staff-position'); ?></h3>
             <p><?php echo rwmb_meta('fgs_staff-bio'); ?>
             </p>
           </div>

         </div>
       </div>

       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row about-info">

           <div class="col-md-4 col-sm-12 col-xs-12">
             <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
           </div>

           <div class="col-md-8 col-sm-12 col-xs-12 about-staff">
             <i class="fa fa-camera-retro fa-4x about-fa"></i>
             <h2>Penny Lee</h2>
             <h3>President</h3>
             <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
             </p>
           </div>

         </div>
       </div>
     </div>


    <div class="row">

       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row about-info">

           <div class="col-md-4 col-sm-12 col-xs-12">
             <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
           </div>

           <div class="col-md-8 col-sm-12 col-xs-12 about-staff">
             <i class="fa fa-camera-retro fa-4x about-fa"></i>
             <h2>Penny Lee</h2>
             <h3>President</h3>
             <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
             </p>
           </div>

         </div>
       </div>

       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row about-info">

           <div class="col-md-4 col-sm-12 col-xs-12">
             <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
           </div>

           <div class="col-md-8 col-sm-12 col-xs-12 about-staff">
             <i class="fa fa-camera-retro fa-4x about-fa"></i>
             <h2>Penny Lee</h2>
             <h3>President</h3>
             <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
             </p>
           </div>

         </div>
       </div>
     </div>


    <div class="row">

       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row about-info">

           <div class="col-md-4 col-sm-12 col-xs-12">
             <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
           </div>

           <div class="col-md-8 col-sm-12 col-xs-12 about-staff">
             <i class="fa fa-camera-retro fa-4x about-fa"></i>
             <h2>Penny Lee</h2>
             <h3>President</h3>
             <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
             </p>
           </div>

         </div>
       </div>

       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row about-info">

           <div class="col-md-4 col-sm-12 col-xs-12">
             <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
           </div>

           <div class="col-md-8 col-sm-12 col-xs-12 about-staff">
             <i class="fa fa-camera-retro fa-4x about-fa"></i>
             <h2>Penny Lee</h2>
             <h3>President</h3>
             <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
             </p>
           </div>

         </div>
       </div>
     </div>
   </div>
 </div>


        <?php the_content(); ?>
      </div><!-- .entry-content -->

      <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
      </div>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
