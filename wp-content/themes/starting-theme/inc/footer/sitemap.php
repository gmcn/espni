  <div class="row sitemap">
    <div class="col-md-3">
      <a href="/"><img width="230px" src="<?php echo get_template_directory_uri(); ?>/images/espni-whiteout.svg" alt="<?php bloginfo( 'name' ); ?>" /></a>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-3">

          <h5><?php $menu_location = 'footer-1';
          $menu_locations = get_nav_menu_locations();
          $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
          $menu_name = (isset($menu_object->name) ? $menu_object->name : '');
          echo esc_html($menu_name); ?></h5>

          <?php wp_nav_menu( array(
            'theme_location' => 'footer-1' ) );
            ?>
        </div>
        <div class="col-md-3">

          <h5><?php $menu_location = 'footer-2';
          $menu_locations = get_nav_menu_locations();
          $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
          $menu_name = (isset($menu_object->name) ? $menu_object->name : '');
          echo esc_html($menu_name); ?></h5>

          <?php wp_nav_menu( array(
            'theme_location' => 'footer-2' ) );
            ?>
        </div>
        <div class="col-md-3">

          <h5><?php $menu_location = 'footer-3';
          $menu_locations = get_nav_menu_locations();
          $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
          $menu_name = (isset($menu_object->name) ? $menu_object->name : '');
          echo esc_html($menu_name); ?></h5>

          <?php echo wp_get_nav_menu_object("my mainmenu" ); ?>
          <?php wp_nav_menu( array(
            'theme_location' => 'footer-3' ) );
            ?>
        </div>
        <div class="col-md-3">

          <h5><?php $menu_location = 'footer-4';
          $menu_locations = get_nav_menu_locations();
          $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
          $menu_name = (isset($menu_object->name) ? $menu_object->name : '');
          echo esc_html($menu_name); ?></h5>

          <?php wp_nav_menu( array(
            'theme_location' => 'footer-4' ) );
            ?>
        </div>
      </div>

    </div>
  </div>
