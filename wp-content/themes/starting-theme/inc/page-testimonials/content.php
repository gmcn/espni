<div class="container-fluid contact-content">
  <div class="container">

   <h1><?php the_title() ?></h1>

   <div class="row">

       <?php

       $currentID = get_the_ID();

         $args = array(
             'post_type'      => 'page',
             'posts_per_page' => -1,
             'post_parent'    => $post->ID,
             'order'          => 'ASC',
             'orderby'        => 'menu_order',
          );


         $parent = new WP_Query( $args );

         if ( $parent->have_posts() ) : ?>

             <?php
             $i = 1;
             while ( $parent->have_posts() ) : $parent->the_post();

             $companyLogo = get_field('company_logo');
             $companyRep = get_field('company_rep');
             $menu_order = $post->menu_order;

             ?>

             <?php if($i % 2) : ?>

               <div class="col-sm-6 testimonial wow fadeInLeft">
                 <div class="testimonial__wrapper grey">
                   <div class="row">
                     <div class="col-md-5 brand">
                       <img src="<?php echo $companyLogo ?>" alt="<?php the_title() ?>">
                     </div>
                     <div class="col-md-7 copy">
                       <h3>#<?php echo $menu_order; ?></h3>
                       <h4><?php echo $companyRep; ?></h4>
                       <h5><?php the_title() ?></h5>
                       <a href="<?php the_permalink() ?>">Click to read</a>
                     </div>
                   </div>
                 </div>
               </div>

             <?php else : ?>

               <div class="col-md-6 testimonial wow fadeInLeft">
                 <div class="testimonial__wrapper darkgrey">
                   <div class="row">
                     <div class="col-md-7 copy">
                      <h3>#<?php echo $i; ?></h3>
                      <h4><?php echo $companyRep; ?></h5>
                      <h5><?php the_title() ?></h5>
                      <a href="<?php the_permalink() ?>">Click to read</a>
                     </div>
                     <div class="col-md-5 brand">
                       <img src="<?php echo $companyLogo ?>" alt="<?php the_title() ?>">
                     </div>
                   </div>
                 </div>
               </div>

             <?php endif ?>

             <?php $i++; endwhile; ?>

         <?php endif; wp_reset_postdata(); ?>



     </div>

   </div>

  </div>
</div>
