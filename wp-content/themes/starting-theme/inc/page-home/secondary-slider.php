<?php if( have_rows('secondary_slider') ): ?>

  <div class="container secondaryslider">

  	<ul class="secondarybxslider">

  	<?php while( have_rows('secondary_slider') ): the_row();

  		// vars
  		$icon = get_sub_field('icon');
  		$copy = get_sub_field('copy');

  		?>

  		<li>

        <img class="wow fadeIn" src="<?php echo $icon ?>" />

        <?php echo $copy; ?>

  		</li>

  	<?php endwhile; ?>

  	</ul>

    <a href="/about">Click Here</a> to find out more about us.

  </div>

<?php endif; ?>
