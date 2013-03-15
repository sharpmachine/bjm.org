<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 */

get_header(); ?>

<div class="page">
	<div class="container">
		<div class="row">
			<div class="span12">
			<?php get_template_part( 'loop', 'page' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
