<?php get_header(); ?>

		<div>
			<div class="container ask-question">
				<div class="row ask-question-row">
					<div class="span6 aq-text">
						Q<img src="<?php bloginfo('template_directory'); ?>/img/amperstand.png" class="amperstand" alt="amperstand">A
						<img src="<?php bloginfo('template_directory'); ?>/img/curly-bracket.png" class="curly-bracket" alt="curly bracket">
					</div>
					<div class="span6 ask-container">
						<div class="align">
							<h2>Have a question?</h2>
							<div class="ask">Go ahead and ask! If we answer it we'll notify you.</div>
							<form action="">
								<input type="text">
								<button type="submit" class="btn">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div>
			<div class="container">
				<div class="row">
					<div class="span4 qa-sidbar">

							<?php query_posts( 'post_type=q_a' ); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="qa-container">

								<div class="pull-left question-icon">
									<?php if (has_term('written' , 'qa_cat')): ?>
											<img src="<?php bloginfo('template_directory'); ?>/img/info-icon.png" alt="Written Icon">
									<?php endif; ?>
									<?php if (has_term('video' , 'qa_cat')): ?>
											<img src="<?php bloginfo('template_directory'); ?>/img/video-icon.png" alt="Video Icon">
									<?php endif; ?>
								</div>

								<div class="question-title">
									<a href="#<?php the_id(); ?>"><?php the_title(); ?></a>
								</div>

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
		</div>


<?php get_footer(); ?>
