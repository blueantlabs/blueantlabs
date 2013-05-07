<?php get_header(); ?>

<?php /* Start the Loop. */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<?php endwhile; // End the loop. Whew. ?>

<?php get_footer(); ?>