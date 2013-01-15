    		</div><!-- .row -->
		</div> <!-- /container -->
		<footer role="contentinfo">
			<div class="container">
		
				<div class="home_email_signup">
					<form action="http://ibethel.us1.list-manage2.com/subscribe/post?u=b824912e75c6e72f2ace5ded3&amp;id=c45a6c9961" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
						<div id="email" style="float: left;">
							<input type="text" value="you@something.com" name="EMAIL" class="required email" onfocus="if (this.value=='you@something.com')this.value=' ';"onblur="if (this.value==' ')this.value='you@something.com';" id="mce-EMAIL">
						</div>
					<div id="subscribe" style="float: left;">
						<button class="btn" title="Subscribe" id="mc-embedded-subscribe">Submit</button>
					</div>
					</form>
				</div><!-- !newsletter sign up -->


				<form action="index.php" method=POST>
					<b>Amount $ </b> <input type=text size=6 name=amount>
					<br><br>
					<input type=submit value="Continue">
				</form>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="RQ6FZ8HTXF9PC">
					<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/scr/pixel.gif" width="1" height="1">
				</form><!-- !donate to BJM -->


			</div>
				<div id="site-info">
					&copy;<?php echo date ('Y'); ?><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?></a>
					 | <a href="http://twitter.github.com/bootstrap" target="_blank">Bootstrap Docs</a><!-- Remove for production -->
				</div><!-- #site-info -->
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

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

	<!-- Remove these before deploying to production -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

<?php wp_footer(); ?>
	</body>
</html>