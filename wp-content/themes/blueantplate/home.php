<?php get_header(); ?>

<nav id="access" role="navigation">
  <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
	<ul id="navigation" class="navigation">
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
		
<div id="content" class="content">

<div id="home-content" class="home-img">
	<a id="port-tfp" href="<?php bloginfo('url') ?>/portfolio" alt="The Future Project" ></a>
	<a id="port-icurt" href="<?php bloginfo('url') ?>/portfolio" alt="iPhone Curt" ></a>
	<a id="port-vside" href="<?php bloginfo('url') ?>/portfolio" alt="Villeside Promotions" ></a>
	<a id="port-rlw" href="<?php bloginfo('url') ?>/portfolio" alt="Read Learn Write" ></a>
	<a id="port-theights" href="<?php bloginfo('url') ?>/portfolio" alt="Thetis Heights" ></a>
	<a id="port-mobi" href="<?php bloginfo('url') ?>/portfolio" alt="mobiLIFE, Inc." ></a>
</div>
			

<?php get_footer(); ?>