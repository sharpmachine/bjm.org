<?php get_header(); ?>

		<section id="page" class="span8">
<h2>Videos</h2>
<?php query_posts( 'qa_cat=video' ); ?>	
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

<h1>Questions</h1>
<?php query_posts( 'qa_cat=written' ); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h3><a href=""><?php the_title(); ?></a></h3>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
<?php wp_reset_query(); ?>
<hr>

<h1>Written</h1>
<?php query_posts( 'qa_cat=written' ); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

		</section><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
