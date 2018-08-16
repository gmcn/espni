<?php

$column1 = get_field('column_1');
$column2 = get_field('column_2');

 ?>

<div class="intro">
<div class="container">
  <div class="row">
    <div class="col-md-6 wow fadeInLeftBig">
      <?php echo $column1 ?>
    </div>
    <div class="col-md-5 col-md-offset-1 wow fadeInRightBig">
      <?php echo $column2 ?>
    </div>
  </div>
</div>
