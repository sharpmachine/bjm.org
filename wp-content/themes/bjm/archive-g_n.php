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

<div>
	<div class="container">
		<div class="row">
			<div class="span8 ">

				<div class="filter">
					Filter By <a href="http://localhost/bjm.org/gn-category/written/"><img src="<?php bloginfo( 'template_directory' ); ?>/img/written-filter.png" alt="Written"></a><a href="http://localhost/bjm.org/gn-category/video/"><img src="<?php bloginfo( 'template_directory' ); ?>/img/video-filter.png" alt="Video"></a>
				</div>
				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div class="goodnews-post">

						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>

						<div class="blog-author">
							<div>By <?php the_author_posts_link(); ?></div>
							<div>Posted on <?php the_time('F jS, Y'); ?></div>
						</div>

						<!-- !blog title, author date -->
						
						<div>
							<span class="bold uppercase">
								Categories: 
							</span>
							<span class="underline">
								<?php echo get_the_term_list( $post->ID, 'gn_cat'); ?>
							</span>
						</div>
						<div>
							<span class="bold uppercase">
								Tags: 
							</span>
							<span class="underline">
								<?php echo get_the_term_list( $post->ID, 'gn_tag', ' ', ', ' ); ?>
							</span>
						</div>
						<div class="bold uppercase underline">
								<?php comments_number( '0', '1', '%' ); ?> Comments
						</div>
						
					</div>
							
						<!-- !categories, tags, comments counter -->

					<div class="excerpt">
						<?php the_excerpt(); ?>
						<?php if(get_field('vimeo_id')): ?>
							<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="620" height="340" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<?php endif; ?>
					</div>

						<!-- .entry-content -->

				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); ?>

				<div class="pagination pagination-large my-pagination">
				  <ul>
				    <li><a href="#">Prev</a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">Next</a></li>
				  </ul>
				</div>


			</div>
			<div class="span1"></div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
