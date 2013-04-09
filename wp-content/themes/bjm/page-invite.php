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
				<div class="span12 contact-details">

						Contact Details

				</div>
			</div>
			
			<!-- <iframe src="http://travel.ibethel.org/questionnaires/kris/trips/new?iframe=true" height="4300px" width="100%" seamless="true" scrolling="no"></iframe> -->

			<form action="request.php" method="post">

				<div class="row">
					<div class="span4">

						<label>Contact Person name</label>
						<input type="text" class="span4">
						<label>Title/Position</label>
						<input type="text" class="span4">
						<label>E-mail Address</label>
						<input type="text" class="span4">
						<label>Phone Number</label>
						<input type="text" class="span4">
						<label>Phone Number 2</label>
						<input type="text" class="span4">
						
					</div>

					<div class="span4">

						<label>Organization Name</label>
						<input type="text" class="span4">
						<label>Senior Leadership</label>
						<input type="text" class="span4">
						<label>Website</label>
						<input type="text" class="span4">
						<label>Address</label>
						<input type="text" class="span4">
						<label>Address Line 2</label>
						<input type="text" class="span4">
						
					</div>
					<div class="span4">

						<label>City</label>
						<input type="text" class="span4">
						<label>Country</label>
						<input type="text" class="span4">
						<label>State/Province</label>
						<input type="text" class="span4">
						<label>Zip/Postcode</label>
						<input type="text" class="span4">
						<label>Phone</label>
						<input type="text" class="span4">
						<label>Fax</label>
						<input type="text" class="span4">
						<button type="submit" value="Submit" class="btn pull-right">Submit</button>
						
					</div>
				</div>

			</form>

		</div>
	</div>

<?php get_footer(); ?>
