<?php 
/*
	Template Name: Blog
*/
get_header(); ?>

<section id="page" class="span12">
	<div class="blog">
		<div class="container">
			<div class="row">
				

					<?php query_posts( 'showposts=2' ) ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="span4">
						<div class="image"><?php the_post_thumbnail( array(300,165) ); ?></div>
						<h2 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="blog-author">By <?php the_author_posts_link() ?></div>
						<div class="blog-author">Posted on <?php the_time('F jS, Y') ?></div>
						<div class="uppercase blog-page">
							<div><span class="bold">Categroies: </span><span class="underline"><?php the_category(',&nbsp;'); ?></span></div>
							<div><span class="bold">Tags: </span><span class="underline"><?php the_tags('',', '); ?></span></div>
							<div class="bold underline"><?php comments_number( '0', '1', '%' ); ?>  Comments</div>
						</div>
						<div class="the-excerpt"><?php the_excerpt(); ?></div>

						Pagination
					</div>

					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>	
			
				<div class="span1">
					
				</div>
				<div class="span3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	
</section>
<!-- #page -->
 <div class="pagination">
 	<ul>
 		<li><a href="#">Prev</a></li>
 		<li class="active">
 			<a href="#">1</a>
 		</li>
 		<li><a href="#">2</a></li>
 		<li><a href="#">3</a></li>
 		<li><a href="#">4</a></li>
 		<li><a href="#">Next</a></li>
 	</ul>
 </div>

<?php get_footer(); ?>
