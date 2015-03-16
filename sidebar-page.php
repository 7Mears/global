<?php
/*
Template Name: Sidebar Page
*/

get_header(); ?>


  <?php if (have_posts()) : while (have_posts()) : the_post();?>
  <div class="page--title">
    <div class="wrapper">
      <?php if( !empty(get_field('sidebar_page_header')) ): ?>
        <h1 id="post-<?php the_ID(); ?>"><?php the_field('sidebar_page_header'); ?></h1>
      <?php else: ?>

        <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>

      <?php endif; ?>
    </div><!-- /wrapper -->
  </div><!-- /page title -->

  <div class="wrapper clearfix">

    <div class="page-main">
      <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </div>

    <div class="page-side">

      <?php the_field('sidebar'); ?>

    </div>
  </div><!-- #wrapper -->

<?php get_footer(); ?>
