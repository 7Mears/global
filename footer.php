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

		<a class="to-top" href="#0"><i class="fa fa-arrow-up"></i></a>

	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>


</body>
</html>
