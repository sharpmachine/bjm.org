<?php get_header(); ?>

<div class="q-and-a-background boxy">
	<div class="container">
		<div class="row ask-question-row">
			<div class="span6 aq-text">
				Q<img src="<?php bloginfo('template_directory'); ?>/img/amperstand.png" class="amperstand" alt="amperstand">A
				<img src="<?php bloginfo('template_directory'); ?>/img/curly-bracket.png" class="curly-bracket" alt="curly bracket">
			</div>
			<div class="span6 ask-container">
				<div class="align">
					<h2>Have a question?</h2>
<<<<<<< HEAD
					<div class="ask">Go ahead and ask! Check back to see if we answered it.</div>
					<?php echo do_shortcode( '[contact-form-7 id="1114" title="Ask A Question"]' ); ?>
=======

					<div class="ask">Go ahead and ask! Check back to see if we answered it.</div>
					<?php echo do_shortcode( '[contact-form-7 id="1114" title="Ask A Question"]' ); ?>

>>>>>>> 2496c5e51498ef1172340826ce8b90efe080f84c
				</div>
			</div>
		</div>
	</div>
</div>

<div class="archive-q-a">
	<div class="container">
		<div class="row">
		
			<div class="span4 qa-sidebar visible-desktop">
				<div class="affix-top" data-spy="affix" data-offset-top="525">
				<?php query_posts( 'post_type=q_a' ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<div class="answer-block">
						<?php if (has_term('written' , 'qa_cat')): ?>
							<a href="#<?php echo( basename(get_permalink()) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/info-icon.png" alt="Written Icon"></a>
						<?php else: ?>
							<a href="#<?php echo( basename(get_permalink()) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/video-icon.png" alt="Video Icon"></a>
						<?php endif; ?>
						<div class="answer-title"><a href="#<?php echo( basename(get_permalink()) ); ?>"><?php the_title(); ?></a></div>
						<div class="clearfix"></div>
					</div>
					
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
				</div>
				<!-- !Questions -->
			</div>
			
			<div class="span8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="answer" id="<?php echo( basename(get_permalink()) ); ?>">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<?php if(get_field('vimeo_id')): ?>
							<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<?php endif; ?>
					</div><!-- .answer -->
				<?php endwhile; endif; ?>
				<!-- !Answers -->
			</div>
			
		</div>
	</div>
</div>

	<script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('.qa-sidebar').onePageNav();
    });
  </script>
  
<?php get_footer(); ?>

