<?php if(is_page( 190 )) : ?>

<div class="container os">
  <div class="row">
    <div class="col-xs-6 col-md-3 wow fadeInLeft">
      <img src="<?php echo get_template_directory_uri(); ?>/images/mac-support.svg"  />
      <p>
        <a href="/wp-content/uploads/installers/SplashtopSOS.dmg">Click Here</a> For Mac Support
      </p>
    </div>
    <div class="col-xs-6 col-md-3 wow fadeInUp">
      <img src="<?php echo get_template_directory_uri(); ?>/images/windows-support.svg"  />
      <p>
        <a href="/wp-content/uploads/installers/SplashtopSOS.exe">Click Here</a> For Windows Support
      </p>
    </div>
    <div class="col-xs-6 col-md-3 wow fadeInDown">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ios-support.svg"  />
      <p>
        <a href="https://itunes.apple.com/us/app/splashtop-on-demand-support-sos/id1230853703?ls=1&mt=8" target="_blank">Click Here</a> For IOS Support
      </p>
    </div>
    <div class="col-xs-6 col-md-3 wow fadeInRight">
      <img src="<?php echo get_template_directory_uri(); ?>/images/android-support.svg"  />
      <p>
        <a href="https://play.google.com/store/apps/details?id=com.splashtop.sos" target="_blank">Click Here</a> For Android Support
      </p>
    </div>
  </div>
</div>

<div class="container-fluid fast-support wow fadeInUp">
  <div class="container">
    <h4>Fast Support</h4>
    <p>
      For fast support please enter your 9-didgit code
    </p>

    <div class="row form-group">
      <form method="POST" action="https://www.fastsupport.com/servlet/download/customerDownload" name="ssid">
        <div class="col-md-4">
          <label>Your name:</label><br  />
          <input class="form-control" type="text" name="name" required>
        </div>
        <div class="col-md-4">
          <label>Type the 9 digit number:</label><br  />
          <input class="form-control" type="text" name="supportSessionId" maxlength="9" equired>
        </div>
        <div class="col-md-2">
          <input class="button" type="SUBMIT" value="Connect">
        </div>
      </form>
    </div>

  </div>
</div>
<?php endif; ?>
