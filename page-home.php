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

      <a href="condominiums/">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/home-condos.jpg" />

          <div class="figcaption">
            <h2>Condominiums</h2>
            <p>We are experts at exteriors of every size.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="renovations/">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/rennovations.jpg" />
          <div class="figcaption">
            <h2>Renovations</h2>
            <p>Helping to make old homes look like new.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="new-homes/">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/newhomes.jpg" />
          <div class="figcaption">
            <h2>New Homes</h2>
            <p>We work with the city’s top home builders.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>

      <a href="diy/">
        <div class="figure">
          <img src="http://localhost/global-exteriors/wp-content/uploads/2015/03/diy.jpg" />
          <div class="figcaption">
            <h2>Do-It-Yourself</h2>
            <p>You can do it with our advice and support.</p>
          </div>
          <div class="figbutton"><i class="fa fa-arrow-right"></i></div>
        </div>
      </a>


    </div><!-- #wrapper -->
  </div><!-- #grid -->
</section>


<section class="home-estimate clearfix">
  <div class="wrapper">
    <h3>GET A FREE SIDING ESTIMATE</h3>
    <p>Global Exteriors is a full-service shop. We have all the products you need to finish or renovate the siding on your house. Whether you’re doing it yourself, or hiring us to do it for you, the first step will be  to get an estimate.</p>
    <a class="button" href="estimate/">Click here</a>

  </div>
</section>


<?php get_footer(); ?>
