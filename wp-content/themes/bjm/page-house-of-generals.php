<?php 
/*
	Template Name: House of Generals
*/
	get_header(); ?>

	<div class="HoG-video">
		<div class="container">
			<div class="row">
				<div class="span12 video-wrapper-single">

					<iframe class="vimeo" src="http://player.vimeo.com/video/<?php the_field('hog_video_id'); ?>?byline=0&amp;portrait=0" width="940" height="528" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

				</div>
			</div>
		</div>
	</div>

	<div class="HoG-text">
		<div class="container">
			<div class="row">
				<div class="span12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<div class="donate-mf boxy">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h3>Donate Materials Or Finances</h3>
				<p>
					If you have materials relating to past revivals or revivalists you would like to donate which would be beneficial to The House of Generals please email us with details.
				</p>
				<p>
					Likewise if you wish to make a financial contribution please do so below.
				</p>
			</div>
		</div>
		<div class="row give-money">
			<div class="span2 money-bag">
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/money-bag.png" alt="Donate Money">
			</div>
			<div class="span3 donation">
				<h2>Donate Money</h2>
				<!-- <form id="generals-donate-form" method=POST>
					<div class="control-group">
						<div class="controls">					  	
							<input type="text" name="amount" placeholder="Amount to be given" class="span3">
						</div>

						<button type="submit" class="btn donate-btn">Continue</button>
					</div>
				</form> -->
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">
					<input type="hidden" name="hosted_button_id" value="JUD5STEKAV8VW">
					<button class="btn paypal-btn" style="top:0;">
						<a href="#">
							<img src="/bjm.org/wp-content/themes/bjm/img/paypal.png" alt="Paypal">
							<p>Donate</p>
						</a>
					</button>
				</form>
			</div>
			<div class="span2 or">
				OR
			</div>
			<div class="span2 drawer">
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/drawer.png" alt="Donate Materials">
			</div>
			<div class="span3 donate-materials">
				<h2>Donate Materials</h2>
				<?php echo do_shortcode( '[contact-form-7 id="1113" title="Donate Materials"]' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>