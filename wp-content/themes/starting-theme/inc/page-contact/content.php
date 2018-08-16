<div class="container-fluid contact-content">
  <div class="container">

   <h1><?php the_title() ?></h1>

   <div class="row">
     <div class="col-md-3 matchheight">
       <div class="corners">
         <h2>Contact Us</h2>
         <?php the_content() ?>
       </div>
     </div>
     <div class="col-md-6 matchheight">
       <div class="corners">
         <?php echo do_shortcode('[formidable id=3]'); ?>
       </div>
     </div>
     <div class="col-md-3 matchheight">
       <div class="corners">
         <a href="https://www.google.com/maps/place/ESP+(NI)+Ltd/@54.5142674,-6.0423791,17z/data=!3m1!4b1!4m5!3m4!1s0x486108ec2cc508d9:0xdbd605990bffc857!8m2!3d54.5142674!4d-6.0401851" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/map.jpg" /></a>
       </div>
     </div>
   </div>

  </div>
</div>
