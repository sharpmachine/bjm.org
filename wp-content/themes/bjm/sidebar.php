				<section id="sidebar">
					
					<ul>

						<div class="rss-subscribe">
							<img src=" <?php bloginfo('template_directory');?>/img/rss-gray.png" alt="RSS">
							<span>Subscribe</span>
						</div>
	
					<?php
					/* When we call the dynamic_sidebar() function, it'll spit out
		 			* the widgets for that widget area. If it instead returns false,
		 			* then the sidebar simply doesn't exist, so we'll hard-code in
		 			* some default sidebar stuff just in case.
		 			*/
				if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

					
	
				<?php endif; ?>
				
				</section><!-- #sidebar -->