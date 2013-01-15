<?php 
/*
	Template Name: Blog
*/
get_header(); ?>

<section id="page" class="span8">
	<?php query_posts( 'showposts=-1' ) ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>	
</section><!-- #page -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>
