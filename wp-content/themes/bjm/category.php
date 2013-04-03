<?php get_header(); ?>

<div class="blog">
	<div class="container">
		<div class="row">
			<div class="span9">

				<?php get_template_part( 'loop', 'blog' ); ?>
			
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
