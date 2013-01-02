<?php get_header(); ?>

<nav id="access" role="navigation">

  <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>

	<ul id="navigation" class="navigation">

		<li><a href="<?php bloginfo('url') ?>">Home</a></li>
		<li><a href="<?php bloginfo('url') ?>/portfolio">Portfolio</a></li>
		<li><a href="<?php bloginfo('url') ?>/services">Services</a></li>
		<li><a href="<?php bloginfo('url') ?>/contact">Contact</a></li>

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