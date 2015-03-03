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
    <p>From cutting-edge healthcare facilities to complex transit tunnels, we are proud to deliver projects that shape our communities and strengthen our nation's infrastructure.</p>
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
            <p>Beetroot water spinach okra.</p>
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
    <h4>News</h4>

    <div class="home-news-section">
      <h5>This is a news post title</h5>
      <p>Progressively repurpose orthogonal supply chains rather than end-to-end customer service. Completely benchmark multimedia based web-readiness and e-business e-commerce.</p>

      <a class="button" href="#0"><i class="fa fa-arrow-right"></i></a>
    </div>

    <div class="home-news-section">
      <h5>This is a news post title</h5>
      <p>Progressively repurpose orthogonal supply chains rather than end-to-end customer service. Completely benchmark multimedia based web-readiness.</p>

      <a class="button" href="#0"><i class="fa fa-arrow-right"></i></a>
    </div>

  </div>
</section>


<?php get_footer(); ?>
