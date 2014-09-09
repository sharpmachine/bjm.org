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
			
				<iframe class="visible-desktop" style="background: none; width: 100%; height: 5100px" src="http://www.ibethel.org/api?t=itinerary&amp;author=billjohnson&amp;styles=<?php bloginfo('template_directory'); ?>/css/itinerary.css" height="100%" width="100%" scrolling="no" frameborder="0"></iframe>
				
				<iframe class="visible-tablet" style="background: none; width: 100%; height: 5150px;" src="http://www.ibethel.org/api?t=itinerary&amp;author=billjohnson&amp;styles=<?php bloginfo('template_directory'); ?>/css/itinerary-tablet.css" height="100%" width="100%" scrolling="no" frameborder="0"></iframe>

				<iframe class="visible-phone" style="background: none; width: 100%; height: 3210px;" src="http://www.ibethel.org/api?t=itinerary&amp;author=billjohnson&amp;styles=<?php bloginfo('template_directory'); ?>/css/itinerary-phone.css" height="100%" width="100%" scrolling="yes" frameborder="0"></iframe>
			</div>
		</div>
		
	</div><!-- .container -->
</div>

<?php get_footer(); ?>