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


<div class="container">

	<?php include('goodnews-filter.php'); ?>
	
	<div class="row">
		<div class="span8">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div class="goodnews-post module">
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>

					<div class="blog-author">
						<div>By <?php the_author_posts_link(); ?></div>
						<div>Posted on <?php the_time('F jS, Y'); ?></div>
					</div>

					<!-- !blog title, author date -->
					
					<div class="cats">
						<span class="bold uppercase">
							Categories: 
						</span>
						<span class="underline">
							<?php echo get_the_term_list( $post->ID, 'gn_cat'); ?>
						</span>
					</div>
					<div class="tags">
						<span class="bold uppercase">
							Tags: 
						</span>
						<span class="underline">
							<?php echo get_the_term_list( $post->ID, 'gn_tag', ' ', ', ' ); ?>
						</span>
					</div>
					<div class="bold uppercase underline hidden">
							<?php comments_number( '0', '1', '%' ); ?> Comments
					</div>
						
					<!-- !categories, tags, comments counter -->

					<div class="excerpt">
						<?php the_excerpt(); ?>
						<?php if(get_field('vimeo_id')): ?>
							<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="620" height="340" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<?php endif; ?>
					</div>
				</div><!-- .goodnews -->

			<?php endwhile; // end of the loop. ?>
			
			<?php bootstrap_pagination(); ?>
			
		</div>
		
		<div class="span3 pull-right">
			<?php get_sidebar(); ?>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>