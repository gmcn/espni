( function($) {

  /**
   * BX Sliders
   */

  $('.bxslider').bxSlider({
    mode: 'fade',
    infiniteLoop: true,
    minSlides: 1,
    maxSlides: 1,
    auto: true,
    pause: 5000,
    controls: false,
  });

  $('.secondarybxslider').bxSlider({
    pager: false,
    infiniteLoop: true,
    minSlides: 1,
    maxSlides: 1,
    auto: false,
    pause: 5000,
  });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.solutionheight').matchHeight();
    $('.testimonial').matchHeight();
    $('.testimonialheight').matchHeight();
  }
  window.onload = startMatchHeight;

} ) (jQuery);
