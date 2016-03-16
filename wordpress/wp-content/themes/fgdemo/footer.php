<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fgdemo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fgdemo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fgdemo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fgdemo' ), 'fgdemo', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div id="foot">
  <div class="container">
		<div class="col-md-2 col-sm-3 col-xs-12">
			<img src="http://www.foregroundstudios.net/wp-content/uploads/2016/02/fgstudios-seal-black.png">
		</div>
    <div class="row">
			<div class="col-md-3 col-sm-4 col-xs-12" id="connect">
				<h2>Connect with us</h2>
				<p>
				<i class="fa fa-facebook fa-2x foot-fa"></i>
				<i class="fa fa-instagram fa-2x foot-fa"></i>
				<i class="fa fa-flickr fa-2x foot-fa"></i>
				<i class="fa fa-twitter fa-2x foot-fa"></i>
				<i class="fa fa-youtube fa-2x foot-fa last"></i>
			</p>
			</div>
		<div class="col-md-6 col-sm-4 col-xs-12" id="links">
			<h2>Links</h2>
    <a href="#">Privacy Policy</a> <a href="#">Legal & Policies</a> <a href="#">Terms of Use</a> <a href="#">Apply for Staff</a> <a href="#">Contact Us</a>
		<p><?php echo copyright_yr(); ?> Foreground Studios</p>
    </div>
  </div>

	<div class="row" id="news">
		<div class="col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-3">
		<form class="form" action="//foregroundofficial.us7.list-manage.com/subscribe/post?u=d2dc22bd10fb52688c1cd2164&amp;id=81700ddb1e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
										<input type="email" value="" name="EMAIL" class="form-control" placeholder="your email here"><br>
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--><div style="position: absolute; left: -5000px;" aria-hidden="true">			<input type="text" name="b_d2dc22bd10fb52688c1cd2164_81700ddb1e" tabindex="-1" value=""></div>
		</div>
		<div class="col-md-3 col-sm-5">
			<button type="submit" value="Subscribe" name="subscribe" class="btn btn-default">subscribe</button>
			<!--End mc_embed_signup-->
								</form>
							</div></div>

	</div>
</div>

</body>
</html>
