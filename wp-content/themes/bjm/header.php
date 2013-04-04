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
		
    <title><?php wp_title("",true); ?> | <?php bloginfo('name'); ?></title>
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sharp Machine Media">
	
		<link rel="profile" href="http://gmpg.org/xfn/11" />
    
    <!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,700,400italic,600italic|Open+Sans:300italic,400italic,600italic,700italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
		
    <!-- Le styles -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ) ?>/img/favicon.ico">

		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.7.min.js"></script>
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script><![endif]-->
	
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
			?>
	</head>

	<body <?php body_class(); ?>>

		<header>

			<div class="navbar navbar-static-top bethel-menu visible-desktop">
					<div class="container">
						<div class="menu-wrapper">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker, 'menu' => 'Bethel Menu' ) ); ?>
	      		</div>
	        </div>
	        <div class="bethel-menu-toggle"><div class="chevron"></div> Bethel Menu <div class="chevron"></div></div>
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
	      				<li><a href="https://www.facebook.com/BillJohnsonMinistries"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a></li>
	      				<li><a href="https://twitter.com/billjohnsonBJM"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a></li>
	      				<li><a href="<?php bloginfo('rss_url') ?>"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png"></a></li>
	      			</ul>
	      			
						</div><!--/.nav-collapse -->
	        </div>
	    </div>

    </header>