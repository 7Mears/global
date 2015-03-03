<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Global Exteriors
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrapper">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		<div class="site-info">
			<p>Global Exteriors</p>
		</div><!-- .site-info -->

	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>


</body>
</html>
