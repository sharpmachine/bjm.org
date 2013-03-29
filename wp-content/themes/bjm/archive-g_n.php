<?php get_header(); ?>

<div class="good-news boxy">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Good <img src="<?php bloginfo('template_directory'); ?>/img/healing-icon.png " alt="Good News"> News</h1>
				<h4>Testimonies from the road.</h4>
			</div>
		</div>
	</div>
</div>

<div class="good-news">
	<div class="container">
		<div class="row">
			<div class="span9 single-post">



				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div class="image">
					<?php the_post_thumbnail( array(620,280) ); ?>
				</div>
				<!-- !blog image -->

				<h2 class="blog-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<span class="blog-author">
					By <?php the_author_posts_link() ?> // Posted on <?php the_time('F jS, Y') ?>
				</span>
				<!-- !blog title, author date -->

				<div class="uppercase">
					<span>
						<span class="bold">
							Categroies: 
						</span>
						<span class="underline">
							<?php the_category(',&nbsp;'); ?> //
						</span>
					</span>
					<span>
						<span class="bold">
							&nbsp;Tags: 
						</span>
						<span class="underline">
							<?php the_tags('',', '); ?> //
						</span>
					</span>
					<span class="bold underline">
						&nbsp;<?php comments_number( '0', '1', '%' ); ?>
						Comments
					</span>
				</div>
				<!-- !categories, tags, comments counter -->
				<div class="entry-content single-post">
						<?php the_content(); ?>
					</div>
					<!-- .entry-content -->

				<?php endwhile; // end of the loop. ?>



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
