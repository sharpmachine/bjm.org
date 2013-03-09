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

				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

				   <!-- Carousel items -->
					<div class="carousel-inner">
						<div class="item">
							<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
							<div class="carousel-caption">
								<h4>First Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="item">
							<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
							<div class="carousel-caption">
								<h4>Second Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="item active">
							<img src="http://twitter.github.com/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
							<div class="carousel-caption">
								<h4>Third Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
					</div>

					<!-- Carousel nav -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="news">
	<div class="container">
		<div class="row">
			<div class="span4">

				<h3 class="messages-news-blog">Life <span>Messages</span></h3>
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

				<h3 class="messages-news-blog">Good <span>News</span></h3>
				<ul class="truncate">
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

				<h3 class="messages-news-blog">Bill's <span>Blog</span></h3>
				<ul>
					<?php query_posts( 'cat=-5&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><h3><a href=""><?php the_short_title(20); ?></a></h3></li>
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
	<div class="container shadow">
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
				<div class="featured-product-buttons"><a href="<?php the_field('product_link'); ?>" class="product-link">Purchase</a><a href="<?php the_field(''); ?>" class="other-products">Other Products</a></div>

				<!-- !Featured Product -->

			</div>
		</div>
	</div>
</div>

<article class="video">
	<div class="container">
		<div class="row">
			<div class="span8 video-wrapper big-video">
				<?php $featured_query = new WP_Query( array('posts_per_page' => 1, 'post_type' => array('g_n', 'post'))); 
					while ($featured_query->have_posts()) : $featured_query->the_post();
					$do_not_duplicate[] = $post->ID 
					?>

					<?php if(get_field('vimeo_id')): ?>
						<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="620" height="370" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<?php endif; endwhile; ?>
			</div>
			<div class="span4">
				<div class="row">
					<?php query_posts('showposts=2'); ?>
						<?php while (have_posts()) : the_post();
							if (in_array ($post->ID, $do_not_duplicate)) continue;
							update_post_caches($post);
						?>
					<div class="span4 video-wrapper little-video">
						<?php if(get_field('vimeo_id')): ?>
							<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>" width="300" height="170" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
					<!-- !Videos -->
				</div>
			</div>
		</div>
	</div>
</article>


<div class="facebook">
	<div class="container">
		<div class="row">

			<div class="span4 bill-photo">

				<img src="<?php bloginfo('template_directory'); ?>/img/bill-johnson.png" alt="Bill Johnson">
				
			</div>
			<div class="span8 facebook-borders">
				
				<img src="<?php bloginfo('template_directory'); ?>/img/big-facebook.png" alt="Facebook">
				<div id="lifestream" class="facebook-status">&nbsp;</div>

				<!-- !Facebook -->
			
			</div>
		</div>
	</div>
</div>

<div class="house-generals">
	<div class="container background">
		<div class="row">
			<div class="span8">
			
			</div>
			<div class="span4 opacity">

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
			<div class="span3 ">

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
