    		</div><!-- .row -->
		</div> <!-- /container -->
		<footer role="contentinfo">
			<div class="container">
				<div class="row footer-top">
					<div class="span3">

						<div class="newsletter">
							Newsletter Sign Up
						</div>

						<div class="monthly-podcast">
							Sign up to receive exclusive podcasts monthly
						</div>
						
						<div class="email-signup">
							<form action="http://ibethel.us1.list-manage2.com/subscribe/post?u=b824912e75c6e72f2ace5ded3&amp;id=c45a6c9961" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
								<div id="email" style="float: left;">
									<input type="text" value="Email address" name="EMAIL" class="required email" onfocus="if (this.value=='you@something.com')this.value=' ';"onblur="if (this.value==' ')this.value='you@something.com';" id="mce-EMAIL">
								</div>
							<div id="subscribe" style="float: right;">
								<button type="submit" value="Submit" class="btn" title="Subscribe" id="mc-embedded-subscribe">Submit</button>
							</div>
							</form>
						</div><!-- !newsletter sign up -->

					</div>
					<div class="span2 footer-menu">

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>	

					</div>
					<div class="span2 footer-menu">

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>	
						
					</div>
					<div class="span2 footer-menu">

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>	
						
					</div>
					<div class="span3 donate">

						<div class="donate-text">
							<div class="donate-bjm">
								Donate to BJM
							</div>
							Thank you for your interest in supporting Bill Johnson ministries.
						</div>

						<form action="" method=POST>
							<input type='text' size='6' name='amount' placeholder='Amount to give'>
							<button type="submit" value="Submit" class="btn pull-right">Submit</button>
						</form>

						<!-- paypal -->
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="RQ6FZ8HTXF9PC">
							<!-- <input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/scr/pixel.gif" width="1" height="1"> -->
							<a href="#" class="btn paypal-btn "><img src="<?php bloginfo('template_directory'); ?>/img/paypal.png" alt="Paypal"><span>Donate</span></a>
						</form>
						<!-- !donate to BJM -->

					</div>
				</div>
				<div class="row">
					<div class="span10 copyright-privacy">
						<div id="site-info">
							&copy;<?php echo date ('Y'); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<a href="" >Privacy</a>
							<a href="" >Terms & Conditions</a>
					 		| <a href="http://twitter.github.com/bootstrap" target="_blank">Bootstrap Docs</a><!-- Remove for production -->
						</div><!-- #site-info -->
					</div>
					<div class="span2">
							<a class="brand" href="https://www.facebook.com/BillJohnsonMinistries"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a>
	      			<a class="brand" href="https://twitter.com/billjohnsonBJM"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a>
	      			<a class="brand" href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png"></a>
						</div>
				</div>
			</div>
				
			</div>
		</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-typeahead.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lifestream.js"></script>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

	// <script>
	// 	!function ($) {
	// 	  $(function(){
	// 	  	// carousel demo
	// 	  	$('#myCarousel').carousel()
	// 	  })
	//   }(window.jQuery)
	// </script>

	<!-- Remove these before deploying to production -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

<?php wp_footer(); ?>
	</body>
</html>