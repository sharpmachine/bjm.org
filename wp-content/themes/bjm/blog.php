<?php 
/*
	Template Name: Blog
*/
get_header(); ?>


<div class="blog">
	<div class="container">
		<div class="row">
			<div class="span9">

				<?php query_posts( 'showposts=10&post_type=post' ) ?>
				<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="span4 post-excerpt">
						<div class="image"><?php the_post_thumbnail( array(300,165) ); ?></div>
						<h2 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="blog-author">By <?php the_author_posts_link() ?></div>
						<div class="blog-author">Posted on <?php the_time('F jS, Y') ?></div>
						<div class="uppercase blog-page">
							<div><span class="bold">Categories: </span><span class="underline"><?php the_category(',&nbsp;'); ?></span></div>
							<div><span class="bold">Tags: </span><span class="underline"><?php the_tags('',', '); ?></span></div>
							<div class="bold underline"><?php comments_number( '0', '1', '%' ); ?>  Comments</div>
						</div>
						<div class="the-excerpt"><?php the_excerpt(); ?></div>
						<div class="clearfix"></div>
					</div>

				<?php endwhile; ?>
			
				<!-- no posts found -->
				</div>
				<?php endif; ?>	
			
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
	
<!-- #page -->

<?php get_footer(); ?>
