<?php
/*
Template Name: Contact
*/
?>

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

<div id="bunchamooks" class="content">
		<div class="post-bg">
<?php
	/* Start the Loop.
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>

		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->


<?php endwhile; // End the loop. Whew. ?>
	</div>
</div>			

<?php get_footer(); ?>