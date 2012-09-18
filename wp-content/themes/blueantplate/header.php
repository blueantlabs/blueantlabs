<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="description" content="Professional design and development for the web and mobile in the Cambridge and Boston area." />

		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		wp_head();
?>
	</head>
<body <?php body_class(); ?>>

<div id="topbar"></div>
<header role="banner">
		
	<a href="<?php echo home_url( '/' ); ?>" rel="home">
		<img id="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Blue Ant Labs" /></a>
</header>
		
		<div id="main-back">
		<div id="content-top"></div>
<section id="main" role="main">
<nav id="access" role="navigation">
  <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
	<ul id="navigation">
		<?php if ( is_home() ) { ?>
		<li id="onhomenav"><a href="<?php bloginfo('url') ?>">Home</a></li>
		<?php } else { ?>
		<li id="homenav"><a href="<?php bloginfo('url') ?>">Home</a></li>
		<?php } ?>
		
		<?php if ( is_page_template('portfolio.php') ) { ?>
		<li id="onportnav"><a href="<?php bloginfo('url') ?>/portfolio">Portfolio</a></li>
		<?php } else { ?>
		<li id="portnav"><a href="<?php bloginfo('url') ?>/portfolio">Portfolio</a></li>
		<?php } ?>
		
		<?php if ( is_page_template('services.php') ) { ?>
		<li id="onservnav"><a href="<?php bloginfo('url') ?>/services">Services</a></li>
		<?php } else { ?>
		<li id="servnav"><a href="<?php bloginfo('url') ?>/services">Services</a></li>
		<?php } ?>
		
		<?php if ( is_page_template('contact.php') ) { ?>
		<li id="oncontactnav"><a href="<?php bloginfo('url') ?>/contact">Contact</a></li>
		<?php } else { ?>
		<li id="contactnav"><a href="<?php bloginfo('url') ?>/contact">Contact</a></li>
		<?php } ?>
		
		
	</ul>
</nav><!-- #access -->
		
<div id="content">
