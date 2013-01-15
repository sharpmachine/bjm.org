<?php 
/*
	Template Name: Home
*/
get_header(); ?>

				<section id="page" class="span8">
			
					<h1>Bootstrap starter theme</h1>
					<p>Use this theme as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

					<h3>Life Messages</h3>
					<?php query_posts( 'cat=5&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h3><a href=""><?php the_title(); ?></a></h3>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>

					<h3>Good News</h3>
					<?php query_posts( 'post_type=g_n&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h3><a href=""><?php the_title(); ?></a></h3>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>

					<h3>Bill's Blog</h3>
					<?php query_posts( 'cat=-5&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h3><a href=""><?php the_title(); ?></a></h3>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>

					<img src="<?php the_field('product_image'); ?>" />
					<?php the_field('title'); ?>
					<?php the_field('endorsement'); ?>
					<?php the_field('endorser'); ?>
					<?php the_field('endorser_title'); ?>
					<a href="<?php the_field('product_link'); ?>">Purchase</a>

					<h1>Questions</h1>
					<?php query_posts( 'qa_cat=written&posts_per_page=1' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h3><a href=""><?php the_title(); ?></a></h3>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>
					
					<h1>Written</h1>
					<?php query_posts( 'qa_cat=written&posts_per_page=1' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php // the_excerpt(); ?>
					<?php echo wp_trim_words( get_the_content(), 10, '...<a href=" ' . get_permalink(). '">Read More</a>' ); ?>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>





				</section><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
