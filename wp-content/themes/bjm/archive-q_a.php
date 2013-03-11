<?php get_header(); ?>

		<section id="page" class="span12">

			<div class="container">
				<div class="row">
					<div class="span4">

							<?php query_posts( 'post_type=q_a' ); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="qa-sidbar">
								<?php if (has_term('written' , 'qa_cat')): ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/info-icon.png" alt="">
								<?php endif; ?>
								<?php if (has_term('video' , 'qa_cat')): ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/video-icon.png" alt="">
								<?php endif; ?>
								<h3>
									<a href="#<?php the_id(); ?>"><?php the_title(); ?></a>
								</h3>
							</div>
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?>
							<?php wp_reset_query(); ?>

						<!-- !Questions -->
						
					</div>
					<div class="span8 answers">

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
						<!-- !Answers -->
						
					</div>
				</div>
			</div>

		</section><!-- #page -->


<?php get_footer(); ?>
