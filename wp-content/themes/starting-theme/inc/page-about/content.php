<?php

$image1 = get_field('image1');
$separator_copy_1 = get_field('separator_copy_1');
$image2 = get_field('image2');
$separator_copy_2 = get_field('separator_copy_2');

$column1 = get_field('column_1');
$column2 = get_field('column_2');

$thumb_url = get_the_post_thumbnail_url();

 ?>

<div class="container-fluid about-content">

  <div class="container">

    <h1><?php the_title() ?></h1>
    <?php the_content() ?>

  </div>

</div>

<?php if($image1) : ?>

<div class="container-fluid separator1" style="background: url(<?php echo $image1 ?>) center top; background-size: cover;">

  <div class="vert-align wow fadeIn">
    <h2><span>{</span> <?php echo $separator_copy_1 ?> <span>}</span></h2>
  </div>

</div>

<?php endif; ?>
