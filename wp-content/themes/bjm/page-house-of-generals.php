<?php 
/*
	Template Name: House of Generals
*/
get_header(); ?>

<div class="HoG-video">
	<div class="container">
		<div class="row">
			<div class="span12">
				Viemo Video
			</div>
		</div>
	</div>
</div>

<div class="HoG-text">
	<div class="container">
		<div class="row">
			<div class="span12">
				<?php get_template_part( 'loop', 'page' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="donate-mf boxy">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="materials">
					Donate materials or finances
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12 materials-text">
				<div>If you have materials relating to past revivals or revivalists you would like to donate which would be beneficial to The House of Generals please email us with details.</div>
				<div>Likewise if you wish to make a financial contribution please do so below.</div>
			</div>
		</div>
		<div class="row">
			<div class="span2">
				<img src="<?php bloginfo('template_directory'); ?>/img/money-bag.png" alt="" class="pull-left money-bag" />
			</div>
			<div class="span3 donate-margin">
				<div class="donate-money">
					Donate Money
				</div>
				<div class="amount-to-give">
					<form action="" method=POST>
						<input type='text' name='amount' placeholder='Amount to be given'>
						<button type="submit" class="btn pull-right">
							Submit
						</button>
					</form>
				</div>
				<div class="paypal">
					<form action="" method="post">
						<input type="hidden">
						<input type="hidden">
						<button class="btn paypal-btn"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/paypal.png" alt="Paypal"><p>Donate</p></a></button>
					</form>
				</div>

			</div>

			<div class="span2 or">
				OR
			</div>

			<div class="span2">
				<img src="<?php bloginfo('template_directory'); ?>/img/drawer.png" alt="">
			</div>
			<div class="span3 donate-margin">
				<div class="donate-materials">
					Donate Materials
				</div>
				<div class="submit-email">
					<form action="" method="post" class="validate">
						<form method="post" action="">
							<textarea rows="5">Add list of materials to be donated here</textarea>
				</div>
				<div class="submit-newsletter">
						<button type="submit" value="Submit" class="btn pull-right" title="Subscribe" id="mc-embedded-subscribe">
							Submit
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>