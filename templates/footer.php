<footer class="content-info">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">Jeremy Davis</a>

    <nav>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>

    <div class="footer-social">
      Social
    </div>
  </div>
</footer>
