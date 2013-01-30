<?php get_header(); ?>

		<section id="page" class="span8">

			<h1>Questions</h1>
			<div class="qa_questions">
				<?php query_posts( 'post_type=q_a' ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3>
					<a href="#<?php the_id(); ?>"><?php the_title(); ?></a>
					<?php if (has_term('video' , 'qa_cat')): ?>
					<strong>(Video)</strong>
					<?php endif; ?>
				</h3>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div><!-- .qa-questions -->
			<hr>

			<!-- !Questions -->

			<h1>Answers</h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a name="<?php the_id(); ?>" id="<?php the_id(); ?>" class="qa-aname"></a>
			<div class="qa_single-answer">
				<h2><?php the_title(); ?></h2>
			</div><!-- .qa_single-answer -->
			<?php the_content(); ?>
			<?php if(get_field('vimeo_id')): ?>
			<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<?php endif; ?>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
			<!-- !Answers -->

		</section><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
