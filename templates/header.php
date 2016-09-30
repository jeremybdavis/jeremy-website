<div class="site-header">
  <header class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        
        <button type="button" class="navbar-toggle">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="sr-only"><?= __('Menu', 'sage'); ?></span>
        </button>

        <a class="brand" href="<?= esc_url(home_url('/')); ?>">Jeremy Davis</a>
        <nav class="nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      </div>
    </div>
  </header>
</div>
