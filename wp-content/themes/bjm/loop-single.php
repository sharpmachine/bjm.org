<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 */
?>

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
			<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="700" height="394" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		<?php endif; ?>
	</div>
	<!-- .entry-content -->

<?php endwhile; // end of the loop. ?>