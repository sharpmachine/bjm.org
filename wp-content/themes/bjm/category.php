<?php get_header(); ?>

<div>
	<div class="container">
		<div class="row">
			<div class="span9">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'smm' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				get_template_part( 'loop', 'category' );
				?>
				
			</div>
			<div class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
