</div><!-- #content -->

<div id="sidebar">

	<?php /* Start the Loop. */ ?>
	<?php query_posts('p=168'); ?><!-- 138 for local -->
	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->

<?php endwhile; // End the loop. Whew. ?>

</div><!-- #sidebar -->
</section><!-- #main -->
</div>

<div id="footer-top-bg">
	<footer role="contentinfo">
		<div id="footer-top"></div>

	<?php get_sidebar( 'footer' ); ?>

		<div id="footer-content">

			<p class="alignleft">&copy; 2012 <a href="<?php echo home_url( '/' ) ?>" rel="home"><?php bloginfo( 'name' ); ?></a> </p> 

			<p class="alignright">617 895 6980 &nbsp; &nbsp; | &nbsp;  &nbsp;  <a href="mailto:alex@blueantlabs.com">alex@blueantlabs.com</a></p>

		</div>
	</footer><!-- footer -->
</div><!-- #footer-top-bg -->

<?php wp_footer(); ?>

</body>
</html>