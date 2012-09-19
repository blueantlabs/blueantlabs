</div><!-- #content -->

<div id="sidebar">
	<?php
	/* Start the Loop.
	 */ ?>
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
				
<?php
	get_sidebar( 'footer' );
?>
		<div id="footer-content">
			<p class="alignleft">&copy; <?php echo date("Y"); ?> <a href="<?php echo home_url( '/' ) ?>" rel="home"><?php bloginfo( 'name' ); ?></a> </p> 
			<p class="alignright">617 895 6980 &nbsp; &nbsp; | &nbsp;  &nbsp;  <a href="mailto:alex@blueantlabs.com">alex@blueantlabs.com</a></p>
		</div>
		</footer><!-- footer -->
		</div>
<?php
	wp_footer();
?>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
    <script type="text/javascript" src="http://www.vertstudios.com/vertlib.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/StickyScroller.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/GetSet.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

    <script type="text/javascript">
    $(window).load(function()
    {
        //SCROLLER
		var scroller = new StickyScroller("#navigation",
        {
            start: 300,
            end: 9000,
            interval: 300,
            range: 100,
            margin: 100
        });
		
		var sidescroller = new StickyScroller("#sidebar",
        {
            start: 300,
            end: 9000,
            interval: 300,
            range: 100,
            margin: 100
        });
        
		//OPACITY
		$("#home-content a").animate({
			"opacity" : .75
		});
		$("#home-content a").hover(function(){
			$(this).stop().animate({"opacity" : 1 });
		}, function(){
			$(this).stop().animate({"opacity" : .75 });
		});
    });

    </script>
	</body>
</html>