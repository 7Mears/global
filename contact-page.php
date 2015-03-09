<?php
/*
Template Name: Contact Page
*/

get_header(); ?>


  <?php if (have_posts()) : while (have_posts()) : the_post();?>
  <div class="page--title">
    <div class="wrapper">
      <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
    </div><!-- /wrapper -->
  </div><!-- /page title -->

  <div class="wrapper clearfix">
    <div class="page-main">
      <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </div>

    <div class="page-side">
      <ul>
        <li class="list-title">Contact us</li>
        <li><a href="#0"><i class="fa fa-phone"></i>(306) 978-6605</a></li>
        <li><a href="#0"><i class="fa fa-print"></i>(306) 978-6606</a></li>
        <li><a href="#0"><i class="fa fa-envelope"></i>brian@globalexteriors.com</a></li>
        <li><a href="#0"><i class="fa fa-map-marker"></i>#4-833 Cynthia St</a></li>
        <li><a href="#0"><i class="fa fa-facebook"></i>Facebook</a></li>
      </ul>
    </div>
  </div><!-- #wrapper -->

<?php get_footer(); ?>
