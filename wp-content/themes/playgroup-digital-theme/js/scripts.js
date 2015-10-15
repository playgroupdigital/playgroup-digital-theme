var $ = jQuery;
$(document).ready(function() {
    //Hide
    $('.contact').hide();
    // Contact expando/collapso
    $('.contact-toggle').click(function() {
        $('.contact').slideToggle(500);
        return false;
    });
    // Contact close
    $('button.close').click(function() {
        $('.contact').slideUp(500);
        return false;
    });

    $(".navbar-toggle").on("click", function() {
        $(this).toggleClass("active");
    });



     svgeezy.init(false, 'png');


});



var container = $('.container').offset().top;
    $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > container - 70){
      $(".navbar").addClass("shrink");
      $(".nav-wrap").addClass("nav-bg");
      $(".header-nav").addClass("nav-bg");
    }
    else
    {
      $(".navbar").removeClass("shrink");
      $(".nav-wrap").removeClass("nav-bg");
      $(".header-nav").removeClass("nav-bg");

    }
  });

var config = {
        enter:    'bottom',
        move:     '30px',
        over:     '1s',
        wait:     '0s',
        easing: 'ease',
        scale:    { direction: 'up', power: '0%' },
        rotate:   { x: 0, y: 0, z: 0 },
        opacity:  0,
        mobile: false,
        reset:  false,
        delay:  'onload',
        vFactor: '0.15'
       }

$(document).ready(function() {
      window.sr = new scrollReveal( config );
  });

$(document).ready(function() {
$('.main-gallery').flickity({
  // options
  cellAlign: 'center',
  contain: 'true',
  imagesLoaded: 'true',
  wrapAround: 'true',
  percentPosition: 'false',
  arrowShape: {
  x0: 0,
  x1: 50, y1: 50,
  x2: 55, y2: 50,
  x3: 5
}
});
  });

