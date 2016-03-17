<?php
/**
* Template Name: Event Portfolio (Video) Page Template
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
   <iframe width="560" height="315" src="https://www.youtube.com/embed/RGaxriJ4Iko" frameborder="0" allowfullscreen></iframe>

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
