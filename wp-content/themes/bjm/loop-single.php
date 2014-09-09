
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="image">

		<?php if (!( is_singular('g_n') || in_category( 'video'))): ?>
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(620,341));
			} else { ?>
			<img src="<?php bloginfo('template_directory'); ?>/img/default-img.jpg" alt="<?php the_title(); ?>" />
			<?php } ?>
		<?php endif; ?>
		
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
				Categories: 
			</span>
			<span class="underline">
				<?php the_category(',&nbsp;'); ?> //
				<?php echo get_the_term_list( $post->ID, 'gn_cat'); ?>
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
		<?php if(get_field('vimeo_id')): ?>
			<div class="video-wrapper-single">
				<iframe class="vimeo" src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?byline=0&amp;portrait=0" width="620" height="349" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
		<?php endif; ?>
	</div>
	<!-- .entry-content -->

<?php endwhile; // end of the loop. ?>