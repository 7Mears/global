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

<section class="home-middle clearfix">
  <div id="grid" class="grid clearfix">
    <div class="wrapper">

      <a href="#" class="b">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />

          <div class="figcaption">
            <h2>Condos</h2>
            <p>Soko radicchio bunya nuts gram dulse.</p>
          </div>
          <div class="figbutton">View</div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />
          <div class="figcaption">
            <h2>Renos</h2>
            <p>Two greens tigernut soybean radish artichoke.</p>
          </div>
          <div class="figbutton">View</div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />
          <div class="figcaption">
            <h2>New homes</h2>
            <p>Beetroot water spinach okra water chestnut.</p>
          </div>
          <div class="figbutton">View</div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />
          <div class="figcaption">
            <h2>DIY</h2>
            <p>Water spinach arugula pea tatsoi.</p>
          </div>
          <div class="figbutton">View</div>
        </div>
      </a>


    </div><!-- #wrapper -->
  </div><!-- #grid -->
</section>


<section class="home-bottom">
  <div class="wrapper">
    <h4>News</h4>
  </div>
</section>


<?php get_footer(); ?>
