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
    <p>From siding and soffit, to windows and doors, to eavestroughs and insulation, Global Exteriors has been specializing in residential exteriors for over 20 years.</p>
  </div>
</section>

<section class="home-services clearfix">
  <div id="grid" class="grid">
    <div class="wrapper">

      <a href="#" class="b">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/home-condos.jpg" />

          <div class="figcaption">
            <h2>Condominiums</h2>
            <p>Soko radicchio bunya nuts gram dulse.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/home-renovations.jpg" />
          <div class="figcaption">
            <h2>Renovations</h2>
            <p>Two greens tigernut soybean radish.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/home-newhomes.jpg" />
          <div class="figcaption">
            <h2>New Homes</h2>
            <p>We work with the city's top builders.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/blueprint2.jpg" />
          <div class="figcaption">
            <h2>Do-It-Yourself</h2>
            <p>Water spinach arugula pea tatsoi.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>


    </div><!-- #wrapper -->
  </div><!-- #grid -->
</section>


<section class="home-estimate clearfix">
  <div class="wrapper">
    <h3>Get an estimate</h3>
    <p>Compellingly iterate intermandated ROI with cross-platform resources. Completely maintain client-focused products for client-centered experiences. Conveniently synergize market-driven "outside the box" thinking.</p>
    <a class="button" href="#0">Click here</a>

  </div>
</section>


<?php get_footer(); ?>
