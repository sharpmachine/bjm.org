		<footer>
			<div class="container">
				<div class="footer">
					<div class="row">
						<div class="span3">
							<div class="newsletter">
								Newsletter Sign Up
							</div>
							<div class="small-text">
								Sign up to receive exclusive monthly podcasts
							</div>
							<div class="submit-email">
								<form action="http://ibethel.us1.list-manage2.com/subscribe/post?u=b824912e75c6e72f2ace5ded3&amp;id=c45a6c9961" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
									<input type="text" name="EMAIL" class="required email span3" onfocus="if (this.value=='you@something.com')this.value=' ';"onblur="if (this.value==' ')this.value='you@something.com';" id="mce-EMAIL" placeholder="Email address">
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
								<form action="" id="donate-form" method=POST>
 
  									<div class="control-group">
										<div class="controls">										
    										<input type='text' name='amount' placeholder='Amount to give' class="span3">
  										</div>
  									</div>
									
									<button type="submit" class="btn pull-right">
										Continue
									</button>
								</form>
							</div>
							
							<div class="modal" id="donate-modal">
								<div class="modal-header">
									<a class="close" data-dismiss="modal">&times;</a>
									<h3><img src="<?php bloginfo( 'template_directory' ); ?>/img/donate_header.png" alt="Donate Header"></h3>
								</div>
								<div class="modal-body">
								</div>
								<div class="modal-footer">
									<a data-dismiss="modal" class="btn btn-danger">Cancel</a>
								</div>
							</div><!-- #donate-modal -->
						</div>
					</div>
				</div><!-- .footer -->
				
				<div class="row">
					<div class="span10 copyright">
						&copy;<?php echo date ('Y'); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<a href="<?php bloginfo('url'); ?>/privacy-policy" >Privacy</a>
						<a href="<?php bloginfo( 'url' ); ?>/terms-conditions" >Terms</a>
						<a href="<?php bloginfo( 'url' ); ?>/contact" >Contact BJM</a>
					</div>
					<div class="span2">
						<ul class="footer-icons inline pull-right">
		  				<li><a href="https://www.facebook.com/BillJohnsonMinistries"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a></li>
		  				<li><a href="https://twitter.com/billjohnsonBJM"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a></li>
		  				<li><a href="<?php bloginfo('rss_url') ?>"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png"></a></li>
		  			</ul>
					</div>
				</div>
			</div>
		</footer>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/scrollTo.min.js"></script>
  	<script src="<?php bloginfo ('template_directory'); ?>/js/nav.js"></script>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins-min.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script-min.js"></script>

	<!-- Google Analytics: UA-2614909-11 -->
	
	<?php wp_footer(); ?>
	</body>
</html>