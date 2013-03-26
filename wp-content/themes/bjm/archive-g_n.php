<?php get_header(); ?>

<div class="good-news">
	<div class="container">
		<div class="row">
			<div class="top-shadow">
				<img src="<?php bloginfo('template_directory'); ?>/img/shadow-top.png" alt="Top Shadow">
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h1>Good <img src="<?php bloginfo('template_directory'); ?>/img/healing-icon.png " alt="Good News"> News</h1>
			</div>
			<div class="testimonies">
				Testimonies from the road.
			</div>
		</div>
		<div class="row">
			<div class="top-shadow">
				<img src="<?php bloginfo('template_directory'); ?>/img/shadow-bottom.png" alt="Top Bottom">
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
				<?php if(get_field('vimeo_id')): ?>
				<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<?php endif; ?>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
				<hr>
				<?php wp_reset_query(); ?>
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
