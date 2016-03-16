<?php
/**
* Template Name: Contact Us Page Template
*/
    get_header();
     ?>

     <div class="container-fluid" id="headerBG" style="background-image: url('http://hdwallpapersfit.com/wp-content/uploads/2015/02/amazing-cityscape-wallpapers-desktop.jpg'); background-attachment: fixed;">
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



<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
  <header class="entry-header">
    <?php the_post_thumbnail(); ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>

  <div class="row" style="margin-top: 15px;">
    <div class="col-md-6 col-md-offset-3">
  <?php the_content(); ?>
</div></div>
</div><!-- .entry-content -->

<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>




<span id="contact-flag" style="display: none" /></span>



<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/wp-content/themes/fgdemo/inc/contact-us-form.php";
   include_once($path);
?>




<div class="container" id="contact">
  <div clas="row">
  <div class="col-md-3 col-md-offset-1 col-sm-12 col-xs-12" id="contact-info">

<div class="row">
    <h2>Our info</h2>
    <i class="fa fa-phone fa-3x"></i><br>
    <b>Phone</b><br> (xxx)-xxx-xxxx<br><br>
</div>

<div class="row">
    <i class="fa fa-location-arrow fa-3x"></i><br>
      <b>Address</b><br>
    42 Wallaby Way<br>Sydney, Australia<br><br>
</div>

<div class="row">
    <i class="fa fa-envelope fa-3x"></i><br>
    <b>Email</b><br> support(at)<br>
    foregroundusa.com
</div>
  </div>

  <div class="col-md-5" id="note">
    <h2>Or drop us a note!</h2>
<form role="form" method="post" action="">

  <div class="row">
        <div class="col-sm-6">
                <label for="name" class="control-label">First Name <b>*</b></label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo htmlspecialchars($_POST['firstname']); ?>">
            <?php echo "<p class='text-danger'>$errFName</p>";?>
        </div>

        <div class="col-sm-6">
                        <label for="name" class="control-label">Last Name <b>*</b></label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo htmlspecialchars($_POST['lastname']); ?>">
            <?php echo "<p class='text-danger'>$errLName</p>";?>
        </div>

  </div>

<div class="row">
        <div class="col-sm-6">
                <label for="email" class="control-label">Email <b>*</b></label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>

        <div class="col-sm-6">
                        <label for="phone" class="control-label">Phone</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="<?php echo htmlspecialchars($_POST['tel']); ?>">

  </div>
</div>

<div class="row">

        <div class="col-sm-12">
            <label for="message" class="control-label">Message <b>*</b></label>
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>

            <p><b>*</b> is required</p>
        </div>
    </div>

        <div class="col-sm-10 col-sm-offset-3">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    <div class="form-group">
        <div class="col-sm-10">
            <!-- <! Will be used to display an alert to the user-->
            <?php echo $result; ?>
        </div>
    </div>
</form>
</div>
</div>
</div></div>


</center>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
