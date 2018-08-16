<?php

$profile1img = get_field('profile1img');
$profile1name = get_field('profile1name');
$profile1title = get_field('profile1title');

$profile2img = get_field('profile2img');
$profile2name = get_field('profile2name');
$profile2title = get_field('profile2title');

$profile3img = get_field('profile3img');
$profile3name = get_field('profile3name');
$profile3title = get_field('profile3title');

$profile4img = get_field('profile4img');
$profile4name = get_field('profile4name');
$profile4title = get_field('profile4title');

$profile5img = get_field('profile5img');
$profile5name = get_field('profile5name');
$profile5title = get_field('profile5title');

$profile6img = get_field('profile6img');
$profile6name = get_field('profile6name');
$profile6title = get_field('profile6title');

$profile7img = get_field('profile7img');
$profile7name = get_field('profile7name');
$profile7title = get_field('profile7title');

$profile8img = get_field('profile8img');
$profile8name = get_field('profile8name');
$profile8title = get_field('profile8title');

$profile9img = get_field('profile9img');
$profile9name = get_field('profile9name');
$profile9title = get_field('profile9title');

 ?>

 <?php if($profile1img) : ?>

<div class="container-fluid team">

  <div class="container">
    <h2>Meet the team</h2>
  </div>

  <div class="row top">
    <div class="col-md-6">
      <div class="wrapper wow fadeInLeft" style="background: #f27724 url(<?php echo $profile1img ?>) center top no-repeat; background-size: cover;">
        <div class="hover">
            <div class="vert-align">
              <h3><?php echo $profile1name ?></h3>
              <h4>
                <?php echo $profile1title ?>
              </h4>
              <h5>#1</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="wrapper wow fadeIn">
        <div class="vert-align">
          <img src="<?php echo get_template_directory_uri(); ?>/images/espni-whiteout.svg" />
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="wrapper wow fadeInRight" style="background: #f27724 url(<?php echo $profile2img ?>) center top no-repeat;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile2name ?></h3>
            <h4>
              <?php echo $profile2title ?>
            </h4>
            <h5>#2</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row middle">
    <div class="col-md-3">
      <div class="wrapper wow fadeInLeft">
        <div class="vert-align">
          <img src="<?php echo get_template_directory_uri(); ?>/images/espni-whiteout.svg" />
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="wrapper wow fadeIn" style="background: #f27724 url(<?php echo $profile3img ?>) center top no-repeat;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile3name ?></h3>
            <h4>
              <?php echo $profile3title ?>
            </h4>
            <h5>#3</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="wrapper wow fadeInRight" style="background: #f27724 url(<?php echo $profile4img ?>) center top no-repeat; background-size: cover;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile4name ?></h3>
            <h4>
              <?php echo $profile4title ?>
            </h4>
            <h5>#4</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row bottom">

    <div class="col-md-3">
      <div class="wrapper wow fadeInLeft" style="height: 330px; margin-bottom: 15px; background: #f27724 url(<?php echo $profile5img ?>) center top no-repeat;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile5name ?></h3>
            <h4>
              <?php echo $profile5title ?>
            </h4>
            <h5>#5</h5>
          </div>
        </div>
      </div>
      <div class="wrapper wow fadeInLeft" style="height: 330px; background: #f27724 url(<?php echo $profile6img ?>) center top no-repeat;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile6name ?></h3>
            <h4>
              <?php echo $profile6title ?>
            </h4>
            <h5>#6</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="wrapper wow fadeInUp" style="height: 915px; background: #f27724 url(<?php echo $profile7img ?>) center top no-repeat; background-size: cover;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile7name ?></h3>
            <h4>
              <?php echo $profile7title ?>
            </h4>
            <h5>#7</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="wrapper wow fadeInUp" style="height: 915px; background: #f27724 url(<?php echo $profile8img ?>) center top no-repeat; background-size: cover;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile8name ?></h3>
            <h4>
              <?php echo $profile8title ?>
            </h4>
            <h5>#8</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="wrapper wow fadeInRight" style="height: 330px; margin-bottom: 15px; background: #f27724 url(<?php echo $profile9img ?>) center top no-repeat;">
        <div class="hover">
          <div class="vert-align">
            <h3><?php echo $profile9name ?></h3>
            <h4>
              <?php echo $profile9title ?>
            </h4>
            <h5>#9</h5>
          </div>
        </div>
      </div>
      <div class="wrapper wow fadeInRight" style="height: 330px; background: #f27724; position:relative">
        <div class="vert-align">
          <img src="<?php echo get_template_directory_uri(); ?>/images/espni-whiteout.svg" />
        </div>
      </div>
    </div>

  </div>

</div>

<?php endif; ?>
