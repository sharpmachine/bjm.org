		
<footer>
	<div class="container">
		<div class="row footer">
			<div class="span3">
				<div class="newsletter">
					Newsletter Sign Up
				</div>
				<div class="small-text">
					Sign up to receive exclusive podcasts monthly
				</div>
				<div class="submit-email">
					<form action="http://ibethel.us1.list-manage2.com/subscribe/post?u=b824912e75c6e72f2ace5ded3&amp;id=c45a6c9961" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
						<input type="text" value="Email address" name="EMAIL" class="required email span3" onfocus="if (this.value=='you@something.com')this.value=' ';"onblur="if (this.value==' ')this.value='you@something.com';" id="mce-EMAIL">
				</div>
				<div class="submit-newsletter">
						<button type="submit" value="Submit" class="btn pull-right" title="Subscribe" id="mc-embedded-subscribe">
							Submit
						</button>
					</form>
				</div>
			</div>
			<div class="span2 vertical-menu hidden-phone">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>	
			</div>
			<div class="span2 vertical-menu hidden-phone">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker, 'menu' => 'footer-menu-1' ) ); ?>
			</div>
			<div class="span2 vertical-menu hidden-phone">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker, 'menu' => 'footer-menu-2' ) ); ?>
			</div>
			<div class="span3">
				<div class="donate-to-bjm">
					Donate to BJM
				</div>
				<div class="small-text">
					Thank you for your interest in supporting Bill Johnson Minstries.
				</div>
				<div class="amount-to-give">
					<form action="" method=POST>
						<input type='text' name='amount' placeholder='Amount to give' class="span3">
						<button type="submit" class="btn pull-right">
							Submit
						</button>
					</form>
				</div>
				<div class="paypal">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="RQ6FZ8HTXF9PC">
						<button class="btn paypal-btn"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/paypal.png" alt="Paypal"><p>Donate</p></a></button>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span10 copyright">
				&copy;<?php echo date ('Y'); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<a href="<?php bloginfo('url'); ?>/privacy-policy" >Privacy</a>
				<a href="<?php bloginfo( 'url' ); ?>/terms-conditions" >Terms & Conditions</a>
			</div>
			<div class="span2">
				<ul class="footer-icons inline pull-right">
  				<li><a href="https://www.facebook.com/BillJohnsonMinistries"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a></li>
  				<li><a href="https://twitter.com/billjohnsonBJM"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a></li>
  				<li><a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png"></a></li>
  			</ul>
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
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-affix.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lifestream.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/slide-in.js"></script>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

	<script>
	// 	!function ($) {
	// 	  $(function(){
	// 	  	// carousel demo
	// 	  	$('#myCarousel').carousel()
	// 	  })
	//   }(window.jQuery)
	</script>

	<!-- Remove these before deploying to production -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

<?php wp_footer(); ?>
	</body>
</html>