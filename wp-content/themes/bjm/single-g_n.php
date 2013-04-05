<?php get_header(); ?>

<div class="good-news boxy-no-color">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Good <img src="<?php bloginfo('template_directory'); ?>/img/healing-icon.png " alt="Good News"> News</h1>
				<h4>Testimonies from the road.</h4>
			</div>
		</div>
	</div>
</div>

<div class="single-post">
	<div class="container">
		<div class="row">
			<div class="span8 ">

				<?php
				/* Run the loop to output the post.
				 * If you want to overload this in a child theme then include a file
				 * called loop-single.php and that will be used instead.
				 */
				get_template_part( 'loop', 'single' );
				?>
				
			</div>
			
			<div class="span3 pull-right">
				<?php get_sidebar(); ?>
			</div>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>
