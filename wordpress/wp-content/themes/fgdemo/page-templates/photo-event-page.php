<?php
/**
* Template Name: Event Portfolio (Photo) Page Template
*/
    get_header();
     ?>

     <!-- populates thumbnails for slider - figure out how to do it in php -->
     <script>
     var images = ['http://www.foregroundstudios.net/wp-content/uploads/2016/03/APO_Competition_CL_May10-WM-0147.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/APO_Competition_CL_May10-WM-9216.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/APO_PhotoChallenge_LostInTheWild_CL-4802.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/APO_PhotoChallenge_LostInTheWild_CL-4948.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/BW_MiscYears_Chris_L-0671.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/Diana_Grad_Pics_Mar13_2015-6199.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/Foreground_Official_Dec7_BV-3869.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/HassebladTest_SF_Downtown_Jan4-15-36730005-copy.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/HK_Central_Nightshoot_Sep1-3474.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/HK_LauFauShan_Aug30-3336.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/IG_HK_TST_NightShoot_Aug31-3418-4.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/Laguna_Beach_V_Feb14_CL-4714.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/Megan_Photoshoot_Small_Unedited_CL_May1_2015-8635.jpg',
     'http://www.foregroundstudios.net/wp-content/uploads/2016/03/Taiwan_2009_ChrisLee-0280.jpg',
     'http://41.media.tumblr.com/e4013c221c65a990c4b835c7bdfc5e09/tumblr_mztfz82XEE1rv17teo1_1280.png'];
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
     <img src="http://www.foregroundstudios.net/wp-content/uploads/2016/03/APO_Competition_CL_May10-WM-0147.jpg" id="mainImage"/>


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

 </div></div>

<div class="row">
   <div class="col-md-4 col-md-offset-1 col-sm-5 col-xs-12">
     <h2>Event Details</h2>
     <p>Bacon ipsum dolor amet esse lorem turducken jerky, culpa dolore ribeye. Mollit aute ut tail porchetta short loin. Do swine short ribs pork loin ball tip capicola pig aliqua excepteur occaecat cillum tenderloin consectetur pork chop quis. Sunt veniam consequat swine ham hock duis bacon.</p>
   </div>

   <div class="col-md-6 col-sm-7 col-xs-12">
     <h1 class="entry-title"><?php the_title(); ?></h1>
     <p>Bacon ipsum dolor amet esse lorem turducken jerky, culpa dolore ribeye. Mollit aute ut tail porchetta short loin. Do swine short ribs pork loin ball tip capicola pig aliqua excepteur occaecat cillum tenderloin consectetur pork chop quis. Sunt veniam consequat swine ham hock duis bacon.</p>
   <p>Et sausage tail dolore, veniam drumstick hamburger strip steak aliquip ham. Bresaola ipsum sint ribeye doner consequat capicola culpa. Quis tongue ball tip meatball tri-tip nostrud alcatra pariatur dolore culpa fatback ribeye turducken. T-bone meatball nostrud, qui cow in occaecat ipsum dolore rump nulla duis kielbasa shoulder sint. Elit t-bone non corned beef landjaeger, aliquip est pork loin deserunt chicken. Beef ribs eu nulla jerky occaecat deserunt shankle alcatra tenderloin proident frankfurter cupim aliqua. Chicken ribeye hamburger tail, laborum turkey ullamco aliquip.</p>
     <?php the_content(); ?>
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
