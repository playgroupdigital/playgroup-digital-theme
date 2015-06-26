var $ = jQuery;

$(document).ready(function() {

    //Hide stuffs

    $('.contact').hide();

    // Contact expando/collapso

    $('.contact-toggle').click(function() {
        $('.contact').slideToggle(500);
        return false;
    });

    // Contact close

    $('.contact a.contact-close').click(function() {
        $('.contact').slideUp(500);
        return false;
    });

     $('.nav a').on('click', function(){
    $(".navbar-toggle").click()
    });



  $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
  });



});
