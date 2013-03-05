<?php 
/*
	Template Name: Home
*/
get_header(); ?>

<section id="page" class="span12">

<div class="hero-slider">
	<div class="container">
		<div class="row">
			<div class="span12">

				Hero Slider

			</div>
		</div>
	</div>
</div>

<div class="news">
	<div class="container">
		<div class="row">
			<div class="span4">

				<h3 class="messages-news-blog">Life</h3><h3 class="messages-news-blog-2nd">Messages</h3>
				<ul>
					<?php query_posts( 'cat=5&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><h3><a href=""><?php the_title(); ?></a></h3></li>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<!-- !Life Messages -->

			</div>
			<div class="span3 offset1 right-border">

				<h3 class="messages-news-blog">Good</h3><h3 class="messages-news-blog-2nd">News</h3>
				<ul>
					<?php query_posts( 'post_type=g_n&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><h3><a href=""><?php the_title(); ?></a></h3></li>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<!-- !Good News -->

			</div>
			<div class="span3 right-border">

				<h3 class="messages-news-blog">Bill's </h3><h3 class="messages-news-blog-2nd">Blog</h3>
				<ul>
					<?php query_posts( 'cat=-5&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><h3><a href=""><?php the_title(); ?></a></h3></li>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<!-- !Blog -->

			</div>
		</div>
	</div>
</div>

<div class="feature-product">
	<div class="container">
		<div class="row">
			<div class="span4">

				<div class="product-image"><img src="<?php the_field('product_image'); ?>" /></div>

			</div>
			<div class="span8">
				
				<div class="product-title"><?php the_field('title'); ?></div>
				<div class="product-endorsement">"<?php the_field('endorsement'); ?>"</div>
				<div class="product-endorser-title">
					<span class="product-endorser">- <?php the_field('endorser'); ?></span>
					// <?php the_field('endorser_title'); ?>
				</div>
				<div class="product-link"><a href="<?php the_field('product_link'); ?>">Purchase</a></div>
				<div class="other-products"><a href="<?php the_field(''); ?>">Other Products</a></div>

				<!-- !Featured Product -->

			</div>
		</div>
	</div>
</div>

<div class="video">
	<div class="container">
		<div class="row">
			<div class="span8">
				
				<?php $featured_query = new WP_Query( array('posts_per_page' => 1, 'post_type' => array('g_n', 'post'))); 
				while ($featured_query->have_posts()) : $featured_query->the_post();
				$do_not_duplicate[] = $post->ID 
				?>

				<?php if(get_field('vimeo_id')): ?>
				<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="600" height="370" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<?php endif; ?>

				<?php endwhile; ?>

			</div>
			<div class="span4">

				<?php query_posts('showposts=2'); ?>
					<?php while (have_posts()) : the_post();
						if (in_array ($post->ID, $do_not_duplicate)) continue;
						update_post_caches($post);
						 ?>

						<?php if(get_field('vimeo_id')): ?>
						<div class="span4 video-layout"><iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="300" height="170" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
						<?php endif; ?>

				<?php endwhile; ?>
				<!-- !Videos -->

			</div>
		</div>
	</div>
</div>


<div class="facebook">
	<div class="container">
		<div class="row">
			<div class="span12 facebook-borders">
				
				<div id="lifestream" class="facebook-status">&nbsp;</div>

				<!-- !Facebook -->
			
			</div>
		</div>
	</div>
</div>

<div class="house-generals">
	<div class="container">
		<div class="row">
			<div class="span8">
			
			</div>
			<div class="span4">

				<div class="generals-heading">House of Generals</div>

					<p>We love to honor leader around the world who are bringing the kingdom of heaven to earth but one of the mandates on my life and on our church family is also honor leaders who spearhead revivals of the past.</p>
					<p>The Lord has made it very clear to us that a practical way we can do this is through what we have called The House of Generals ...</p>
				
					<div class="learn-more">
						Learn More
					</div>

			</div>
		</div>
	</div>
</div>

<div class="q-and-a">
	<div class="container">
		<div class="row">
			<div class="span4 questions">

				<?php query_posts( 'qa_cat=written&posts_per_page=1' ); ?>	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href=""><?php the_title(); ?></a>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
				<?php wp_reset_query(); ?>

			</div>
			<div class="span3">

				Q&A

			</div>
			<div class="span5 answers">
				
				<?php query_posts( 'qa_cat=written&posts_per_page=1' ); ?>	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php // the_excerpt(); ?>
				<?php echo wp_trim_words( get_the_content(), 10, '...<a href=" ' . get_permalink(). '">Read More</a>' ); ?>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
				<!-- !Q&A -->
				
			</div>
		</div>
	</div>
</div>

</section><!-- #page -->

<?php get_footer(); ?>
