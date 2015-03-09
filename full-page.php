<?php
/*
Template Name: Full Page
*/

get_header(); ?>


  <?php if (have_posts()) : while (have_posts()) : the_post();?>
  <div class="page--title">
    <div class="wrapper">
      <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
    </div><!-- /wrapper -->
  </div><!-- /page title -->

  <div class="wrapper clearfix">
    <div class="full-page--content">
      <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </div>
  </div><!-- #wrapper -->

<?php get_footer(); ?>
