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

<section class="home-top">
  <div class="wrapper">
    <p>From cutting-edge healthcare facilities to complex transit tunnels, we are proud to deliver projects that shape our communities and strengthen our nation's infrastructure.</p>
  </div>
</section>

<section class="home-middle">
  <div class="wrapper">

    <div class="card">
      <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house.jpg">
      <h3>Commercial</h3>
    </div>

    <div class="card">
      <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house.jpg">
      <h3>Residential</h3>
    </div>

    <div class="card">
      <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house.jpg">
      <h3>Restoration</h3>
    </div>

    <div class="card">
      <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house.jpg">
      <h3>Commercial</h3>
    </div>

    <a class="button" href="#0">Find out more</a>

  </div>
</section>

<section class="home-bottom">
  <div class="wrapper">
    <h4>News</h4>
  </div>
</section>


<?php get_footer(); ?>
