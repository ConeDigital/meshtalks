jQuery(document).ready( function($) {

    //Fixed Header on Scroll
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 150 && $(window).width() >= 900 && hasBeenTrigged == false) { // if scroll is greater/equal then 100 and hasBeenTrigged is set to false.
            $(".cd-header").addClass('cd-fixed-header');
            hasBeenTrigged = true;
        }
        else if( $(this).scrollTop() <= 150 && $(window).width() >= 900 ){
            $(".cd-header").removeClass('cd-fixed-header');
            hasBeenTrigged = false;
        }
    });


});
