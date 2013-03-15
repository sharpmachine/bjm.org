<?php get_header(); ?>

<div>
	<div class="container">
		<div class="row">
			<div class="span9">
				<h1 class="page-title"><?php
								printf( __( 'Tag Archives: %s', 'smm' ), '<span>' . single_tag_title( '', false ) . '</span>' );
							?></h1>

				<?php get_template_part( 'loop', 'tag' ); ?>
				
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
			
<?php get_footer(); ?>
