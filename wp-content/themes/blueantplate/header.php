<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="description" content="Professional design and development for the web and mobile in the Cambridge and Boston area." />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

	<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head(); ?>


	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/GetSet.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js"> </script>
</head>

<body <?php body_class(); ?>>

<header class="header" role="banner">
	<a href="<?php echo home_url( '/' ); ?>" rel="home">
	<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Blue Ant Labs" /></a>
</header>

<div class="main-wrapper">
	<section class="main" role="main">
		<nav class="navigation" role="navigation">
			<?php wp_nav_menu(); ?>
		</nav><!-- #access -->
		<div id="content" class="content">


