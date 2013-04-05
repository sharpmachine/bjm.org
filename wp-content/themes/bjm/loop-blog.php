<div class="row blog">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="span4 post-excerpt module">
			<div class="image">
				<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('blog_thumb');
				} else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/default-img.jpg" alt="<?php the_title(); ?>" />
				<?php } ?>
			</div>
			<h2 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_short_title(35); ?></a></h2>
			<div class="blog-author">By <?php the_author_posts_link() ?></div>
			<div class="blog-author">Posted on <?php the_time('F jS, Y') ?></div>
			<div class="uppercase meta-details blog-page">
				<div><span class="bold">Topics: </span><span class="underline"><?php the_category(',&nbsp;'); ?></span></div>
				<div><span class="bold">Tags: </span><span class="underline"><?php the_tags('',', '); ?></span></div>
				<div class="bold underline hidden"><?php comments_number( '0', '1', '%' ); ?>  Comments</div>
			</div>
			<div class="the-excerpt"><?php the_excerpt(); ?></div>
		</div>

	<?php endwhile; ?>

</div>

<div class="clearfix"></div>

	<?php bootstrap_pagination(); ?>
<?php endif; ?>	


