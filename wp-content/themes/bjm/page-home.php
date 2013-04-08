<?php 
/*
	Template Name: Home
*/
get_header(); ?>

<div class="hero-slider module">
	<div class="container">
		<div class="row">
			<div class="span12">

				<div id="myCarousel" class="carousel slide">
				   <!-- Carousel items -->
					<div class="carousel-inner">

						<?php if(get_field('hero_slide')): ?>
						<?php while (has_sub_field('hero_slide')): ?>
						<div class="item">
							<img src="<?php the_sub_field('slide_image'); ?>" alt="<?php the_sub_field('slide_title'); ?>">
							<div class="carousel-caption hidden-phone">
								<div class="inner">
									<h4><?php the_sub_field('slide_title'); ?></h4>
									<?php the_sub_field('slide_description'); ?>

									<?php if(get_sub_field('external_link')): ?>
										<a href="<?php the_sub_field('external_link'); ?>" class="btn">Read More</a>
									<?php else: ?>
										<a href="<?php the_sub_field('internal_link'); ?>" class="btn">Read More</a>

									<?php endif; ?>
								</div>					
							</div>
						</div>

						<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<ol class="carousel-indicators hidden-phone">
						<?php $i = 0; ?>
						<?php if(get_field('hero_slide')): ?>
						<?php while (has_sub_field('hero_slide')): ?>
						<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="dots "><span></span></li>
						<?php $i++; ?>
					<?php endwhile; ?>
						<?php endif; ?>
				  </ol>

					<!-- Carousel nav -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="<?php bloginfo( 'template_directory' ); ?>/img/left-arrow.png" alt=""></a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="<?php bloginfo( 'template_directory' ); ?>/img/right-arrow.png" alt=""></a>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="news module">
	<div class="container">
		<div class="row">
			<div class="span4 recent-posts">

				<h3 class="messages-news-blog">Life <span>Messages</span></h3>
				<ul>
					<?php query_posts( 'cat=5&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<!-- !Life Messages -->

			</div>
			<div class="span3 recent-posts offset1 right-border">

				<h3 class="messages-news-blog">Good <span>News</span></h3>
				<ul class="truncate">
					<?php query_posts( 'post_type=g_n&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
						<h3 class="hidden-phone">
							<a href="<?php the_permalink() ?>"><?php the_short_title(20); ?></a>
						</h3>
						<h3 class="visible-phone">
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</h3>
					</li>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<!-- !Good News -->

			</div>
			<div class="span3 recent-posts right-border">

				<h3 class="messages-news-blog">Bill's <span>Blog</span></h3>
				<ul>
					<?php query_posts( 'cat=-5&posts_per_page=4' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
						<h3 class="hidden-phone">
							<a href="<?php the_permalink() ?>"><?php the_short_title(20); ?></a>
						</h3>
						<h3 class="visible-phone">
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</h3>
					</li>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</ul>
				<!-- !Blog -->

			</div>
		</div>
	</div>
</div>

<!-- Featured Product -->
<div class="featured-product boxy module">
	<div class="container f-product-mobile no-pad">
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
					<a href="http://store.ibethel.org/index.php?manufacturers_id=1&ref=1&affiliate_banner_id=1" class="btn other-products">Other Products</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- !Featured Product -->

<article class="video module">
	<div class="container">
		<div class="row">
			<div class="span8 video-wrapper big-video">
				<?php $featured_query = new WP_Query( array('posts_per_page' => 1, 'post_type' => array('g_n', 'post'))); 
					while ($featured_query->have_posts()) : $featured_query->the_post();
					$do_not_duplicate[] = $post->ID 
					?>

					<?php if(get_field('vimeo_id')): ?>
						<iframe class="vimeo" src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?byline=0&amp;portrait=0" width="620" height="370" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php endif; ?>
				<?php endwhile; ?>
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
							<iframe src="http://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?byline=0&amp;portrait=0" width="300" height="170" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
					<!-- !Videos -->
				</div>
			</div>
		</div>
	</div>
</article>

<!-- Facebook -->
<div class="facebook boxy module">
	<div class="container no-pad">
		<div class="row">
			<div class="span4 center-photo">
				<!-- <img src="<?php bloginfo('template_directory'); ?>/img/bill-johnson.png" alt="Bill Johnson" class="bill-photo"> -->
				<img src="https://graph.facebook.com/billjohnsonministries/picture?width=271&height=271" class="bill-photo">
			</div>
			<div class="span8 status">
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

<div class="house-of-generals module">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="house-of-generals" class="carousel slide">
					<div class="hog-info">
						<div class="item">
							<img src="<?php the_field('hg_background_image'); ?>" alt="">
							<div class="carousel-caption">
								<div class="hidden-phone">
									<div class="generals-title">
										<?php the_field('hg_title'); ?>
									</div>
									<div class="generals-text">
										<?php the_field('hg_description'); ?>
									</div>
									<div class="btn learn-more">
										<a href="<?php bloginfo( 'url' ); ?>/house-of-generals">Learn More</a>
									</div>
								</div>
								
								<div class="visible-phone">
									<div class="generals-title">
										<?php the_field('hg_title'); ?>
									</div>
									
									<div class="btn learn-more">
										<a href="<?php bloginfo( 'url' ); ?>/house-of-generals">Learn More</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- House of Generals -->


<!-- !House of Generals -->

<div class="q-and-a module">
	<div class="container">
		<div class="row">
			<div class="span12 answers-home">
				<!-- Vertical Carousel -->
				<div id="qa-Carousel" class="carousel slide vertical">
					<div class="a-and-q-text">
						Q<img src="<?php bloginfo('template_directory'); ?>/img/amperstand.png" class="amperstand-home" alt="amperstand">A
					</div>
			<!-- Carousel items -->
					<div class="carousel-inner">
					<?php query_posts( 'qa_cat=written' ); ?>	
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="item">
							<div class="questions">
								<a href="<?php the_permalink() ?>">
									<?php echo wp_trim_words( get_the_title(), 15); ?>
								</a>
							</div>
							<div class="answers">
								<p><?php echo wp_trim_words( get_the_content(), 15, "&nbsp;...&nbsp;<a href=" . get_permalink(). ">Read More</a>" ); ?></p>
							</div>
						</div>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>                
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#qa-Carousel" data-slide="prev"><img src="<?php bloginfo( 'template_directory' ); ?>/img/scroll-up.png" alt=""></a>
					<a class="carousel-control right" href="#qa-Carousel" data-slide="next"><img src="<?php bloginfo( 'template_directory' ); ?>/img/scroll-down.png" alt=""></a>
			</div>
		   <!-- !Vertical Carousel -->
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
