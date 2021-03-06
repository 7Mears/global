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

    <div clas="page-contact-intro">
    <p>
      <?php the_field('contact_intro'); ?>
    </p>
    </div>

    <div class="page-main">
      <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </div>

    <div class="page-side">

      <?php the_field('contact_sidebar'); ?>

    </div>
  </div><!-- #wrapper -->

<?php get_footer(); ?>
