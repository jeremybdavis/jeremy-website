<?php use Roots\Sage\Titles; ?>

<style>
<?php if(get_field('home_contact_bg_img')): ?>
  .home-container .home-contact {
    background-image: url(<?php the_field('home_contact_bg_img') ?>);
  }
<?php endif; ?>
</style>

<div class="home-featured">
  <?php if(get_field('home_featured_img_1')): ?>
    <img src="<?php the_field('home_featured_img_1') ?>" alt="Bio" class="col-md-6" />
  <?php endif; ?>

  <div class="home-copy col-md-6">
    <?php if( get_field('home_featured_headline_1')): ?>
    <h3><?php the_field('home_featured_headline_1') ?></h3>
    <?php endif; ?>
    <a href="#" class="btn btn-primary">
      <?php if( get_field('home_featured_cta_1') ) {
        echo the_field('home_featured_cta_1');
      } else {
        echo 'View More';
      } ?>
    </a>
  </div>
</div>

<div class="home-featured">
  <?php if(get_field('home_featured_img_2')): ?>
    <img src="<?php the_field('home_featured_img_2') ?>" alt="Portfolio" class="col-md-6" />
  <?php endif; ?>

  <div class="home-copy col-md-6">
    <?php if( get_field('home_featured_headline_2')): ?>
      <h3><?php the_field('home_featured_headline_2') ?></h3>
    <?php endif; ?>
    <a href="#" class="btn btn-primary">
      <?php if( get_field('home_featured_cta_2') ) {
        echo the_field('home_featured_cta_2');
      } else {
        echo 'View More';
      } ?>
    </a>
  </div>
</div>

<div class="home-contact">
  <div class="home-copy">
    <?php if( get_field('home_contact_headline')): ?>
    <h3><?php the_field('home_contact_headline') ?></h3>
    <?php endif; ?>
    <a href="#" class="btn btn-primary">
      <?php if( get_field('home_contact_cta') ) {
        echo the_field('home_contact_cta');
      } else {
        echo 'Contact Me';
      } ?>
    </a>
  </div>
</div>
