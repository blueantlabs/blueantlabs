<?php
/*
 * Template Name: Portfolio
 */
?>

<?php get_header(); ?>
<?php	/* Start the Loop. */ ?>

<?php query_posts('category_name=portfolioblurb&posts_per_page=20&orderby=date&order=ASC'); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="port-item">
	<div class="port-bg">
		<article id="post-<?php the_ID(); ?>"  class="alignleft" <?php post_class(); ?>>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
		</article><!-- #post-## -->
	</div>
</div>

<?php endwhile; // End the loop. Whew. ?>
	
<?php get_footer(); ?>