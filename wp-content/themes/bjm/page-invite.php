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
					<?php the_field('hg_title'); ?>
				</div>
			</div>
		</div>
	</div>

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

	<div class="itineary-contact">
		<div class="container">
			<div class="row">
				<div class="span12 contact-details">

						Contact Details

				</div>
			</div>

			<form action="" method="post">

			<div class="row">
				<div class="span4">

					Contact Person name
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Organization Name
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					City
					<div><input type="text"></div>
					
				</div>
			</div>
			<div class="row">
				<div class="span4">

					Title/Position
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Senior Leadership
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Country
					<div><input type="text"></div>
					
				</div>
			</div>
			<div class="row">
				<div class="span4">

					E-mail Address
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Website
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					State/Province
					<div><input type="text"></div>
					
				</div>
			</div>
			<div class="row">
				<div class="span4">

					Phone Number
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Address
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Zip/Postcode
					<div><input type="text"></div>
					
				</div>
			</div>
			<div class="row">
				<div class="span4">

					Phone Number 2
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Address Line 2
					<div><input type="text"></div>
					
				</div>
				<div class="span4">

					Phone
					<div><input type="text"></div>
					
				</div>
			</div>
			<div class="row">
				<div class="span8">
					
				</div>
				<div class="span4">
					
					Fax
					<div><input type="text"></div>

				</div>
			</div>
			<div class="row">
				<div class="span8">
					
				</div>
				<div class="span4 invite-submit">
					
					<button type="submit" value="Submit" class="btn pull-right">Submit</button>

				</div>
			</div>

			</form>

		</div>
	</div>



<?php get_footer(); ?>
