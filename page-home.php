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
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />

          <div class="figcaption">
            <h2>Condominiums</h2>
            <p>Soko radicchio bunya nuts gram dulse.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />
          <div class="figcaption">
            <h2>Renovations</h2>
            <p>Two greens tigernut soybean radish.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />
          <div class="figcaption">
            <h2>New Homes</h2>
            <p>We work with the city's top builders.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="#">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/house2.jpg" />
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


<section class="home-news clearfix">
  <div class="wrapper">
    <h3>News and products</h3>

    <div class="home-news-section">
      <h5>Are you ready to DIY?</h5>
      <p>Installing siding yourself can save you money, but before you embark on a project check your skill level: Do you feel confident? Have you done projects like this before?</p>

      <a class="button" href="#0"><i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="home-news-section">
      <h5>Trim Essentials by Gentek</h5>
      <p>Extra detail at the rooflines, added dimension around the windows, a beautifully appointed entryway and handsomely crafted corners. It's the little things that give a home personality and style.</p>

      <a class="button" href="#0"><i class="fa fa-arrow-right"></i></a>
    </div>

  </div>
</section>


<?php get_footer(); ?>
