<?php 
/* 
	Template Name: Contact
*/
get_header(); ?>

<div class="map">
	<div class="container">
		<div class="row">
			<div class="span12 shrink-300">
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/bing-map.jpg " alt="map">
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<h3>933 College View Dr, Redding, CA 96003</h3>
			</div>
			<div class="span3">
				<h2>530.246.6000</h2>
			</div>
		</div>
	</div>
</div>

<div class="send-a-message boxy">
	<div class="container">
		<div class="row">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>

		</div>
	</div>
</div>

<div class="note">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h6>Please Note</h6>
				<p>We are not in a position to respond to requests for prophetic words, advice, counsel etc.</p>
				<p>Thank you for understanding our heart in this matter.</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
