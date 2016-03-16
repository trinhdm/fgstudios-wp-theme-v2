<?php
/**
* Template Name: Landing Page Template
*/
    get_header('landing');
     ?>

     <style type="text/css">

     .entry-title {
        display: none;
     }

     @font-face {
  font-family: BebasNeue;
  src: url("fonts/BebasNeue Regular.ttf");
}

.entry-title, .site-header, .skip-link, .screen-reader-text, .widget-area, .site-info {
display: none;
}

body#background {
  background: linear-gradient(
      rgba(0,0,0,.4),
      rgba(0,0,0,.4)
    ),
  url('http://www.foregroundstudios.net/wp-content/uploads/2016/02/Chris-Lee-HK_causewaybay.jpg') no-repeat 50% 50% fixed;
  background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
}

body {
  color: #fff;
  font-family: Helvetica;
  overflow: hidden;
  margin-top: -10px;
  margin-bottom: -10px;
}


img {
width: 45%;
height: 45%;
}

h1 {
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  font-size: 40pt;
}


/* navbar styling*/

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
  border: 0px solid #fff;
  box-shadow: inset 0 1px 0 rgba(255,255,255,0);
}

@media screen and (max-width: 769px) {
  .nav>li {
    padding-left: 50px;
  }
}

#navigation {
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid rgba(0, 0, 0, 0);
  margin-right: 50px;
  padding-top: 20px;
}


.navbar-default .navbar-toggle {
height: 40px;
width: 40px;
}

.nav>li>a {
display: inline-block;
}

.icon-height {
position: absolute;
top: 12px;
left: 8px;
}

/* absolute center of div */

.Center-Container.is-Inline {
  text-align: center;
  overflow: hidden;
}

.Center-Container.is-Inline:after,
.is-Inline .Center-Block {
  display: inline-block;
  vertical-align: middle;
}

.Center-Container.is-Inline:after {
  content: '';
  height: 100%;
  margin-left: -0.25em; /* To offset spacing. May vary by font */
}

.is-Inline .Center-Block {
  max-width: 99%; /* Prevents issues with long content causes the content block to be pushed to the top */
  /* max-width: calc(100% - 0.25em) /* Only for IE9+ */
}

.Center-Block {
  padding-bottom: 50px;
}

.top {
  position: relative;
  top: -50px !important;
}

/* form styling */

@media (min-width: 768px) {
.form-inline .form-control {
    display: inline-block;
  }
}

.form-control {
    background-color: rgba(255, 255, 255, 0.25);
    border: 0px solid rgba(238, 238, 238, 0);
    color: #FFFFFF;
    border-radius: 0px;
    box-shadow: none;
    height: 38px;
    padding: 6px 16px;
}

.form-control:hover {
    border: 1px solid #E3E3E3;
    -webkit-transition: border-color 0.5s ease-out;
    -moz-transition: border-color 0.5s ease-out;
    -ms-transition: border-color 0.5s ease-out;
    -o-transition: border-color 0.5s ease-out;
    transition: border-color 0.5s ease-out;
}

.btn-default {
  border-radius: 0px;
  background-color: #888;
  text-transform: lowercase;
  color: #ddd;
  border: 0px solid #fff;
  height: 38px;
  padding: 0 15px;
}

.btn-default:hover {
  -webkit-transition: background-color 0.5s ease-out;
  -moz-transition: background-color 0.5s ease-out;
  -ms-transition: background-color 0.5s ease-out;
  -o-transition: background-color 0.5s ease-out;
  transition: background-color 0.5s ease-out;
}

::-webkit-input-placeholder {
	color: rgba(255,255,255,.8) !important;
}
::-moz-placeholder {
	color: rgba(255,255,255,.8) !important;
}
::-moz-placeholder {   /* Older versions of Firefox */
	color: rgba(255,255,255,.8) !important;
}
::-ms-input-placeholder {
	color: rgba(255,255,255,.8) !important;
}

/* font awesome */

.fa-cog {
  color: rgba(255, 255, 255, 0.8);
  padding-right: 20px;
}

.fa-cog:hover {
  color: rgba(255, 255, 255, 1);
  -webkit-transition: color 0.5s ease-out;
  -moz-transition: color 0.5s ease-out;
  -ms-transition: color 0.5s ease-out;
  -o-transition: color 0.5s ease-out;
  transition: color 0.5s ease-out;
}

     </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>




      <div class="entry-content">
        <body id="background">
          <div class="animated fadeIn">
          <nav class="navbar navbar-default" id="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
        <div class="icon-height"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-facebook fa-2x fa-cog"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram fa-2x fa-cog"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-2x fa-cog"></i></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav></div>
        <div class="animated fadeIn">
        <div class="container">
        <div class="Center-Container is-Inline top">
          <div class="Center-Block">
            <!-- CONTENT -->
            <img src="http://www.foregroundstudios.net/wp-content/uploads/2016/02/fg-logo-white.png"><br><br>

            Site is currently under construction. Please check back soon! Or...
            <br><br><br>
          </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-lg-4">
        <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                  <form class="form" action="//foregroundofficial.us7.list-manage.com/subscribe/post?u=d2dc22bd10fb52688c1cd2164&amp;id=81700ddb1e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="form-group">
                      <input type="email" value="" name="EMAIL" class="form-control" placeholder="your email here"><br>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--><div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_d2dc22bd10fb52688c1cd2164_81700ddb1e" tabindex="-1" value=""></div></div><button type="submit" value="Subscribe" name="subscribe" class="btn btn-default" style="position: relative; top: -20px;">subscribe</button>
        <!--End mc_embed_signup-->
                  </form>
                </div>
              </div>
        </div><br><br>

        </div>
        </div>



        <?php the_content(); ?>
      </div><!-- .entry-content -->

      <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
            </body>
      </div>




		</main><!-- #main -->
	</div><!-- #primary -->
