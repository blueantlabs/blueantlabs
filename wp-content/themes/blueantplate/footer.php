</div><!-- .content -->

<div class="sidebar">
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

</section><!-- .main -->
</div>

<footer class="footer" role="contentinfo">
  <?php	get_sidebar( 'footer' );?>


</footer><!-- footer -->

<?php	wp_footer(); ?>

</body>
</html>