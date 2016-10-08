<?php use Roots\Sage\Titles; ?>

<div class="home-featured">
  <?php if(get_field('home_featured_img_1')): ?>
    <img src="<?php the_field('home_featured_img_1') ?>" alt="Bio" class="col-md-6" />
  <?php endif; ?>

  <div class="home-copy col-md-6">
    <h3>Lorem Ipsum</h3>
    <a href="#" class="btn btn-primary">View Bio</a>
  </div>
</div>

<div class="home-featured">
  <?php if(get_field('home_featured_img_2')): ?>
    <img src="<?php the_field('home_featured_img_2') ?>" alt="Portfolio" class="col-md-6" />
  <?php endif; ?>

  <div class="home-copy col-md-6">
    <h3>Lorem Ipsum</h3>
    <a href="#" class="btn btn-primary">View Portfolio</a>
  </div>
</div>
