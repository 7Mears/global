<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Global Exteriors
 */

get_header(); ?>

<div class="page--title">
  <div class="wrapper">
		<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'global' ); ?></h1>
  </div><!-- /wrapper -->
</div><!-- /page title -->

<div class="wrapper">
	<p><?php _e( 'It looks like nothing was found at this location. Maybe try the search below.', 'global' ); ?></p>
	<?php get_search_form(); ?>
</div><!-- #wrapper -->


<?php get_footer(); ?>
