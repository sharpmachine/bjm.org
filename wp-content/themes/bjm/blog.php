<?php 
/*
	Template Name: Blog
*/
get_header(); ?>


<div class="blog">
	<div class="container">
		<div class="row">
			<div class="span9">
				<?php // query_posts( 'showposts=10&post_type=post' ) ?>
				<?php get_template_part( 'loop', 'blog' ); ?>
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
	
<!-- #page -->

<?php get_footer(); ?>
