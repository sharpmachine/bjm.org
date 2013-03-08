<?php 
/*
	Template Name: Schedule
*/
get_header(); ?>

<section id="page" class="span12">

	<div class="schedule">
		<div class="container">

			<div class="row">
				<div class="span12">

					<img src="<?php bloginfo('template_directory'); ?>/img/schedule-image.png" alt="Schedule">
					
				</div>
			</div>
			<div class="row">
				<div class="span12 bethel-schedule">

					<!-- <iframe style="background: none; position: relative; height: 100%" src="http://www.ibethel.org/api?t=itinerary&amp;author=billjohnson&amp;styles=<?php bloginfo('template_directory'); ?>/css/itinerary.css" height="100%" width="100%" frameborder="0"></iframe> -->
					
					<div class="views-row views-row-1 views-row-odd views-row-first">
    
						<div class="itinerary simplepadding ">

							<div>
								<h4 class="bottom"><strong>School with Randy Clark</strong></h4>
							</div>
	  
	  					<div class="prepend-1">
								<div class="loud">
									<span class="date-display-start">Mar 13, 2013</span>
									<span class="date-display-separator"> - </span>
									<span class="date-display-end">Mar 15, 2013</span>
								</div>
							<div>
								<div>Singapore</div>
								<div>	
									<a href="http://www.kingdominvasion.sg/" target="_blank">http://www.kingdominvasion.sg/</a>
								</div>				
							</div>
						</div>
						<hr />
					</div>	


				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'loop', 'page' ); ?>

</section><!-- #page -->

<?php get_footer(); ?>
