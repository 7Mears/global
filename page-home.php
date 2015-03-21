<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Global Exteriors
 */

get_header(); ?>

<?php layerslider(1) ?>

<section class="home-about">
  <div class="wrapper">
    <?php dynamic_sidebar( 'hometop' ); ?>
  </div>
</section>

<section class="home-services clearfix">
  <div id="grid" class="grid">
    <div class="wrapper">
      <?php dynamic_sidebar( 'homemiddle' ); ?>
    </div><!-- #wrapper -->
  </div><!-- #grid -->
</section>


<section class="home-estimate clearfix">
  <div class="wrapper">
    <?php dynamic_sidebar( 'homebottom' ); ?>
  </div>
</section>


<?php get_footer(); ?>
