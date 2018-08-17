<?php

// the query
$args = array(
	'post_type' => 'post',
  'order'   => 'DESC',
  'posts_per_page' => 4,
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<div class="container-fluid news">
  <div class="row no-gutter">

      	<!-- the loop -->
      	<?php while ( $the_query->have_posts() ) : $the_query->the_post();

        $thumb_url = get_the_post_thumbnail_url();

         ?>
          <div class="col-xs-6 col-lg-3 news-item wow fadeInDown" style="background: url(<?php echo $thumb_url ?>) #BABAB9; background-size: cover;">
            <div class="wrapper">
              <div class="date">
                <?php the_date('d.n.Y'); ?>
              </div>
              <div class="vert-align">
                <h2><?php the_title(); ?></h2>
              </div>
              <a href="<?php echo the_permalink() ?>">Click to read</a>
            </div>
          </div><!-- /.col-md-3 -->
      	<?php endwhile; ?>
      	<!-- end of the loop -->

      	<!-- pagination here -->

      	<?php wp_reset_postdata(); ?>

    </div><!-- /.row no-gutter -->
</div><!-- /.container-fluid news -->

<?php endif; ?>
