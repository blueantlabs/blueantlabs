<?php get_header(); ?>
	<div id="bunchamooks">
	<div class="post-bg">
		<article id="post-0" class="post error404 not-found" role="main">
			<h1><?php _e( 'Not Found', 'boilerplate' ); ?></h1>
			<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'boilerplate' ); ?></p>
			<?php get_search_form(); ?>
			<script>
				// focus on search field after it has loaded
				document.getElementById('s') && document.getElementById('s').focus();
			</script>
		</article>
	</div>
	</div>
<?php get_footer(); ?>
