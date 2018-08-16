  <div class="container testimonials">

    <div class="row">

      <div class="col-md-12">
        <h4>Testimonials</h4> <a href="/testimonials">Click Here</a> to view more testimonials.
      </div>

      <?php
      $args = array(
      'post_parent' => '69',
      'post_type' => 'page',
      'orderby' => 'menu_order',
      'posts_per_page' => 4
      );

      $child_query = new WP_Query( $args );

      ?>

        <?php
        $i = 0;

        while ( $child_query->have_posts() ) : $child_query->the_post();
        $company_rep = get_field('company_rep');
        $company_rep_initials = get_field('company_rep_initials');
        $rating = get_field('rating');

        ?>

        <div class="col-md-3 testimonial wow fadeInDown">
          <div class="wrapper">
            <p class="initials">
              <?php echo $company_rep_initials ?>
            </p>

            <div class="rating">
              <?php if ($rating == 5) : ?>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
              <?php elseif ($rating == 4) : ?>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
              <?php elseif ($rating == 3) : ?>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
              <?php elseif ($rating == 2) : ?>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
              <?php elseif ($rating == 1) : ?>
                <span class="glyphicon glyphicon-star wow fadeInUp" aria-hidden="true"></span>
              <?php endif; ?>
            </div>

            <div class="byline">
              <?php if($company_rep) : ?>
                <?php echo $company_rep ?><br  /> <?php the_title() ?>
              <?php else : ?>
                <?php the_title() ?>
              <?php endif; ?>
            </div>

            <p class="testimonialheight">
              <?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
            </p>


            <a href="<?php the_permalink() ?>">Click here to read more</a>




          </div>
        </div>

      	<?php $i++; endwhile; ?>

        <?php
        wp_reset_postdata(); ?>








    </div><!-- /.row -->
  </div><!-- /.container testimonials -->
</div><!-- /.intro -->
