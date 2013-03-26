<?php 
/*
	Template Name: Home
*/
get_header(); ?>

<div class="hero-slider">
	<div class="container">
		<div class="row">
			<div class="span12">

				<div id="myCarousel" class="carousel slide">
				   <!-- Carousel items -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php bloginfo('template_directory'); ?>/img/bill-hero.jpg" alt="">
							<div class="carousel-caption">
								<div class="inner">
									<h4>First Thumbnail label</h4>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								</div>					
							</div>
						</div>
						<div class="item">
							<img src="<?php bloginfo('template_directory'); ?>/img/bill-hero.jpg" alt="">
							<div class="carousel-caption">
								<div class="inner">
								<h4>Second Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								</div>					
							</div>
						</div>
						<div class="item">
							<img src="<?php bloginfo('template_directory'); ?>/img/bill-hero.jpg" alt="">
							<div class="carousel-caption">
								<div class="inner">
								<h4>Third Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								</div>					
							</div>
						</div>
					</div>

					<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"><span></span></li>
				    <li data-target="#myCarousel" data-slide-to="1"><span></span></li>
				    <li data-target="#myCarousel" data-slide-to="2"><span></span></li>
				  </ol>

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
					<li><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
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
					<li><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
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
					<li><h3><a href="<?php the_permalink() ?>"><?php the_short_title(20); ?></a></h3></li>
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

<!-- Featured Product -->
<div class="featured-product boxy">
	<div class="container f-product-mobile">
		<div class="row">
			<div class="span4 product-image">
				<img src="<?php the_field('product_image'); ?>" />
			</div>
			<div class="span8">
				<div class="product-title">
					<?php the_field('title'); ?>
				</div>
				<div class="product-endorsement">
					"<?php the_field('endorsement'); ?>"
				</div>
				<div class="endorser-title">
					<span class="product-endorser">&#8212; <?php the_field('endorser'); ?></span> // 
					<?php the_field('endorser_title'); ?>
				</div>
				<div class="product-buttons">
					<a href="<?php the_field('product_link'); ?>" class="btn product-link">Purchase</a>
					<a href="<?php the_field(''); ?>" class="btn other-products">Other Products</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- !Featured Product -->

<div class="boxy">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Brandon is a genius!</h1>
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

<!-- Facebook -->
<div class="facebook boxy">
	<div class="container">
		<div class="row">
			<div class="span4 center-photo">
				<img src="<?php bloginfo('template_directory'); ?>/img/bill-johnson.png" alt="Bill Johnson" class="bill-photo">
			</div>
			<div class="span8">
				<div class="row status-borders">
					<div class="span1 facebook-gold">
						<img src="<?php bloginfo('template_directory'); ?>/img/big-facebook.png" alt="Facebook">
					</div>
					<div class="span7 facebook-update">
						<div id="lifestream" class="facebook-status">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- !Facebook -->

<!-- House of Generals -->
<div class="house-of-generals">
	<div class="container">
		<div class="row generals-background">
			<div class="span8">
				
			</div>
			<div class="span4 generals">
				<div class="generals-title">
					House of Generals
				</div>
				<div class="generals-text">
					<p>We love to honor leaders around the world who are bringing the kingdom of heaven to earth but one of the mandates on my life and on our church family is to also honor leaders who spearheaded revivals of the past.</p>
					<p>The Lord has made it very clear to us that a practical way we can do this is through what we have called The House of Generals...</p>
				</div>
				<div class="btn learn-more">
					Learn More
				</div>
			</div>
		</div>
	</div>
</div>
<!-- !House of Generals -->

<div class="q-and-a">
	<div class="container">
		<div class="row">
			<div class="span4 questions-home">

				<?php query_posts( 'qa_cat=written&posts_per_page=1' ); ?>	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
				<?php wp_reset_query(); ?>

			</div>
			<div class="span3 a-and-q-text">

				Q<img src="<?php bloginfo('template_directory'); ?>/img/amperstand.png" class="amperstand-home" alt="amperstand">A

			</div>
			<div class="span5 answers-home">
				
				<?php query_posts( 'qa_cat=written&posts_per_page=1' ); ?>	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php echo wp_trim_words( get_the_content(), 10, '&nbsp;...&nbsp;<a href=" ' . get_permalink(). '">Read More</a>' ); ?>
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

<?php get_footer(); ?>
