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
});
