<?php
/*
 * Template Name: Services
 */
?>

<?php get_header(); ?>

<div class="post-bg">
	<?php /* Start the Loop. */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>"  class="alignleft post-text" <?php post_class(); ?>>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
		<div id="pad"></div>
	</article><!-- #post-## -->

</div>

<?php endwhile; // End the loop. Whew. ?>	

<?php get_footer(); ?>