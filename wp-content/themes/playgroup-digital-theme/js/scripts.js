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
      ($(document).scrollTop() > container - 100){
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


