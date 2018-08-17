<?php

$col1 = get_field('col_1');
$col2 = get_field('col_2');
 ?>

<div class="container-fluid contact-content">
  <div class="container solution">

   <h1><?php the_title() ?></h1>

   <div class="row">
     <div class="col-md-6 intro">
       <?php echo $col1 ?>
       <a href="/contact">Contact Us</a>
     </div>
     <div class="col-md-6">
       <?php echo $col2 ?>
     </div>
   </div>

   <?php //the_content() ?>

  </div>
</div>
