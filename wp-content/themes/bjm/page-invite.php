<?php 
/*
	Template Name: Invite
*/
get_header(); ?>

	<div class="invite-bill">
		<div class="container">
			<div class="row">
				<div class="span12">

					<h2>How to invite Bill</h2>
					<?php get_template_part( 'loop', 'page' ); ?>
				</div>
			</div>
		</div>
	</div>

<?php if(get_field('schedule_is_full')): ?>
	<div class="itineary boxy">
		<div class="container">
			<div class="row">
				<div class="span12">
						
						<h1><?php the_field('availability_large_gold_text'); ?></h1>
						<div class="itineary-text"><?php the_field('availability_small_gray_text'); ?></div>

				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

	<div class="itineary-contact">
		<div class="container">
			<div class="row">
				<div class="span12">
					<iframe src="http://travel.ibethel.org/questionnaires/bill/trips/new?iframe=true" height="4200px" width="100%" seamless="true" scrolling="no"></iframe>
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
