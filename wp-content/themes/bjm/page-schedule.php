<?php 
/*
	Template Name: Schedule
*/
	get_header(); ?>

	<div class="schedule">
		<div class="container">

			<div class="row">
				<div class="span12">
					<img src="<?php bloginfo('template_directory'); ?>/img/schedule-image.png" alt="Schedule">
				</div>
			</div>

			<div class="row">
				<div class="span12 bethel-schedule">					
					<div id="itineraries">Loading trips...</div>
				</div>
			</div>

		</div><!-- .container -->
	</div>

	<?php get_footer(); ?>