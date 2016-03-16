<?php
/**
* Template Name: Event Portfolio (Photo) Page Template
*/
    get_header();
     ?>


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
     <img src="http://d1ya1fm0bicxg1.cloudfront.net/2014/07/promoted-media-optimized_53da4ae651490.jpg" id="mainImage"
         class="cloudzoom" data-cloudzoom="zoomPosition: 'inside', zoomOffsetX: 0"/>


   </div>
   <div id="thumbnails">
       <div class="thumbnailArrows"><img src="http://www.switchlearn.com/1images/leftArrowNavBlack.png" id="leftArrow"/>
       </div>
       <div id="thumbGallery">
           <div id="imageContain"></div>
       </div>
       <div class="thumbnailArrows"><img src="http://www.switchlearn.com/1images/rightArrowNavBlack.png" id="rightArrow" />
       </div>
   </div>

 </div></div>

<div class="row">
   <div class="col-md-4 col-md-offset-1">
     <h2>Event Details</h2>
     <p>Bacon ipsum dolor amet esse lorem turducken jerky, culpa dolore ribeye. Mollit aute ut tail porchetta short loin. Do swine short ribs pork loin ball tip capicola pig aliqua excepteur occaecat cillum tenderloin consectetur pork chop quis. Sunt veniam consequat swine ham hock duis bacon.</p>
   </div>

   <div class="col-md-6">
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
