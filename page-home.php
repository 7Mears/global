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

<section class="hero">

    <?php layerslider(1) ?>
</section>

<section class="home-top">
  <div class="wrapper">
    <h4>From cutting-edge healthcare facilities to complex transit tunnels, we are proud to deliver projects that shape our communities and strengthen our nation's infrastructure.</h>
  </div>
</section>

<section class="home-middle">
  <div class="wrapper">
    <div class="card">1</div>
    <div class="card">2</div>
    <div class="card">3</div>
    <div class="card">4</div>
  </div>
</section>

<section class="home-bottom">
  <div class="wrapper">
    <h4>News</h>
  </div>
</section>


<?php get_footer(); ?>
