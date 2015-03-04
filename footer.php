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

		<div class="footer-widget">
			<ul class="footer-links">
				<li class="list-title">Global Exteriors</li>
				<li>#4-833 Cynthia St</li>
				<li>Saskatoon SK</li>
				<li>S7L 6C2</li>
			</ul>
		</div>

		<div class="footer-widget">
			<ul class="footer-links">
				<li class="list-title">Contact us</li>
				<li><a href="#0"><i class="fa fa-phone"></i>(306)978-6605</a></li>
				<li><a href="#0"><i class="fa fa-print"></i>(306)978-6606</a></li>
				<li><a href="#0"><i class="fa fa-envelope"></i>brian@globalexteriors.com</a></li>
			</ul>
		</div>

		<div class="footer-widget">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>

	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>


</body>
</html>
