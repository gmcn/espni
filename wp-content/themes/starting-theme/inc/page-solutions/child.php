<div class="container-fluid child-solutions">
    <?php

    $currentID = get_the_ID();

      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => 67,
          'order'          => 'ASC',
          'orderby'        => 'menu_order',
          'post__not_in'   => array($currentID)
       );


      $parent = new WP_Query( $args );

      if ( $parent->have_posts() ) : ?>

          <?php while ( $parent->have_posts() ) : $parent->the_post();

          $col1 = get_field('col_1');
          $solutionIcon = get_field('solution_icon');

          ?>

              <div class="row solution wow fadeInUp">
                <!-- <a href="<?php the_permalink() ?>"> -->
                <div class="col-sm-3 col-md-offset-1 matchheight">
                  <a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
                </div>

                <div class="col-sm-3 icon matchheight">
                  <img src="<?php echo $solutionIcon ?>" alt="<?php the_title() ?>">
                </div>

                <div class="col-sm-4 copy matchheight">
                  <strong><?php the_title() ?></strong>
                  <?php echo $col1; ?>
                </div>

                <div class="col-lg-1 hidden-xs hidden-sm hidden-md matchheight">

                </div>
                <!-- </a> -->
              </div>

          <?php endwhile; ?>

      <?php endif; wp_reset_postdata(); ?>


</div>
