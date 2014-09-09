<div class="row">
	<section id="sidebar" class="span3">
		
		<ul>
			<a href="<?php bloginfo( 'rss_url' ) ?>" class="rss-subscribe">
				<img src=" <?php bloginfo('template_directory');?>/img/rss-gray.png" alt="RSS">
					Subscribe
			</a>

		<?php
		/* When we call the dynamic_sidebar() function, it'll spit out
			* the widgets for that widget area. If it instead returns false,
			* then the sidebar simply doesn't exist, so we'll hard-code in
			* some default sidebar stuff just in case.
			*/
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

		

	<?php endif; ?>
	<li class="widget-container">
		<h3 class="widget-title">Recent Good News</h3>
		<ul class="">
			<?php query_posts( 'post_type=g_n&posts_per_page=4' ); ?>	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</li>
	
	</ul>
	</section><!-- #sidebar -->
</div><!-- .row -->