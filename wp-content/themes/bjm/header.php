<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 7 ]>    
<html class="no-js ie7" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 8 ]>    
<html class="no-js ie8" <?php language_attributes(); ?>>
 <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="no-js" <?php language_attributes(); ?>> 
<!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		
		<title>
			<?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'smm' ), max( $paged, $page ) );
			?>
		</title>
    
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	    <meta name="description" content="">
	    <meta name="author" content="Sharp Machine Media">
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
	    
	    <!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,700,400italic,600italic|Open+Sans:300italic,400italic,600italic,700italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
			
	    <!-- Le styles -->
	    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
	    <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
	    <!--[if lte IE 8]><link href="<?php bloginfo('template_directory'); ?>/css/ie8.css" rel="stylesheet"><![endif]-->
			
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	    <!-- Le fav icon -->
	    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ) ?>/img/favicon.ico">

		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr_2.6.2-min.js"></script>
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script><![endif]-->
	
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
			?>

			<script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.3.0/handlebars.min.js" type="text/javascript"></script>
    <script src="//travel.ibethel.org/assets/api/v1/itineraries.js" type="text/javascript"></script>
    <script>
      jQuery(function() {
        new Itinerary({
          id: "bill-johnson",
          root: "#itineraries"
          // emptyMessage: 'No trips found.', // [Optional] A message to populate the root element with in the event of an empty result (default shown here)
          // errorMessage: 'Unable to load trips. Please try again later.', // [Optional] A message to populate the root element with in the event of an error (default shown here)
          // template: $('#itinerary-template').html() // [Optional] A handlebars.js template source to use if you want to change the default output (default shown below)
        }).display();
      });
    </script>
	</head>

	<body <?php body_class(); ?>>

		<header>

			<div class="navbar navbar-static-top bethel-menu visible-desktop">
					<div class="container">
						<div class="menu-wrapper">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker, 'menu' => 'Bethel Menu' ) ); ?>
	      		</div>
	        </div>
	        <div class="bethel-menu-toggle"><div class="chevron"></div> Bethel Sites <div class="chevron"></div></div>
	    </div>

	    <div class="navbar navbar-static-top ">
					<div class="container bill-menu">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	      			<span class="icon-bar"></span>
	      			<span class="icon-bar"></span>
	      			<span class="icon-bar"></span>
						</a>
						<a class="brand" href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory'); ?>/img/bill-johnson-signature.png"></a>
						<div class="nav-collapse">
	      			<ul class="nav">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>
	      			</ul>
	      			<ul class="social-icons inline pull-right">
	      				<!-- <li><a href="http://instagram.com/billjohnson"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.png"></a></li> -->
	      				<li><a href="https://www.facebook.com/BillJohnsonMinistries"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a></li>
	      				<li><a href="http://instagram.com/brevived"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.png"></a></li>
	      				<li><a href="https://twitter.com/billjohnsonBJM"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a></li>
	      				<li><a href="<?php bloginfo('rss_url') ?>"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png"></a></li>
	      			</ul>
	      			
						</div><!--/.nav-collapse -->
	        </div>
	    </div>
    </header>