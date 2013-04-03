<?php get_header(); ?>

<div class="single-post">
	<div class="container">
		<div class="row">
			<div class="span9">
			
				<?php
				/* Run the loop to output the post.
				 * If you want to overload this in a child theme then include a file
				 * called loop-single.php and that will be used instead.
				 */
				get_template_part( 'loop', 'single' );
				?>
				
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
