<?php 
/*
* Template Name: Good News
*/
get_header(); ?>

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
			
			<?php 
			  $temp = $wp_query; 
			  $wp_query = null; 
			  $wp_query = new WP_Query(); 
			  $wp_query->query('post_per_page=10&post_type=g_n'.'&paged='.$paged); 
			  while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>

			<div class="goodnews-post module">
				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>

				<div class="blog-author">
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
				
				<div class="excerpt">
					<?php the_excerpt(); ?>
					<?php if(get_field('vimeo_id')): ?>
						<div class="video-wrapper-single">
							<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?byline=0&amp;portrait=0" width="620" height="340" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					<?php endif; ?>
				</div>
			
			</div><!-- .good-news -->

			<?php endwhile; // end of the loop. ?>
			
			<?php bootstrap_pagination(); ?>
			
		</div>
		
	<?php 
	$wp_query = null; 
	$wp_query = $temp;  // Reset
	?>
		
		<div class="span3 pull-right">
			<?php get_sidebar(); ?>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>