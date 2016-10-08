<?php
/**
 * Template Name: Home
 */

do_action('get_header');

?>

<style>
<?php if(get_field('home_hero_bg_img')): ?>
  .home-container .hero {
    background-image: url(<?php the_field('home_hero_bg_img') ?>);
  }
<?php endif; ?>
</style>

<div class="home-container container-fluid">
  <?php while (have_posts()) : the_post(); ?>
    <div class="hero">
      <?php get_template_part('templates/home/content', 'home-hero'); ?>
    </div>

    <div class="home-main">
      <?php get_template_part('templates/home/content', 'home'); ?>
    </div>
  <?php endwhile; ?>
</div>
