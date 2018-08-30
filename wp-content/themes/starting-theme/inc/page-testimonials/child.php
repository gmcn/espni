<?php

$companyLogo = get_field('company_logo');
$companyRep = get_field('company_rep');
$company_rep_title = get_field('company_rep_title');
$menu_order = $post->menu_order;

 ?>

<div class="container-fluid contact-content">
  <div class="container">

   <h1>Testimonials</h1>

   <div class="row testimonial-main">

       <div class="col-md-4 brand">
         <img src="<?php echo $companyLogo ?>" alt="<?php the_title() ?>" />
       </div>

       <div class="col-md-7 copy">
         <div class="testimonial__header">
           <span>#<?php echo $menu_order; ?></span>
           <?php the_title() ?>
         </div>
         <?php the_content() ?>
         <strong><?php echo $companyRep; ?></strong> - <?php echo $company_rep_title ?><br  />
         <a href="/testimonials">Back To Testimonials</a>
       </div>



     </div>

   </div>

  </div>
</div>
