<div class="primary_slider">
<?php if( have_rows('primary_slider') ): ?>

  <div class="orange-wrapper"></div>

	<ul class="bxslider">

	<?php while( have_rows('primary_slider') ): the_row();

		// vars
		$image = get_sub_field('image');
		$slider_title = get_sub_field('slider_title');
		$slider_link = get_sub_field('slider_link');

		?>

		<li style="background: url(<?php echo $image ?>); background-size: cover; height: calc(100vh);">

      <div class="vert-align wow fadeIn">

        <h1 class=""><?php echo $slider_title ?><h1>
          <?php if ($slider_link) : ?>
            <p><a href="<?php echo $slider_link ?>">Click here</a> to find out more</p>
          <?php endif; ?>

      </div>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
</div>
