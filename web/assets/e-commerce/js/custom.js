/*===========================*/
//sticky header

 jQuery( window ).resize(function() {
    jQuery(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
});
//sticky header on scroll
jQuery(document).ready(function () {
    $(window).load(function () {
        jQuery(".sticky").sticky({topSpacing: 0});
    });
});


/*=========================*/
/*====main navigation hover dropdown====*/
/*==========================*/
jQuery(document).ready(function () {

    jQuery('.js-activated').dropdownHover({
        instantlyCloseOthers: false,
        delay: 0
    }).dropdown();

});

jQuery(document).ready(function(){
    jQuery(".search-toggle").click(function(){
        jQuery(".search-bar").slideDown('fast');
    });
    jQuery('.search-close').click(function () {
            jQuery('.search-bar').slideUp();
        });
});

//owl carousel
jQuery(document).ready(function () {

    jQuery("#owl-slider").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

});


jQuery(window).load(function () {
    jQuery(".content-scroll").mCustomScrollbar({advanced: {
            updateOnContentResize: true
        },
        scrollButtons: {enable: false},
        mouseWheelPixels: "200",
        theme: "dark-2"
    });
});


//tooltips
jQuery(function () {
    jQuery('[data-toggle="tooltip"]').tooltip();
});

//partners slider
jQuery(document).ready(function () {

    jQuery("#owl-partners").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
});

});

//Newsletter
// Checking subcribe form when focus event
    jQuery('.assan-newsletter input[type="text"], .assan-newsletter input[type="email"]').live('focus keypress', function () {
        var $email = $(this);
        if ($email.hasClass('error')) {
            $email.val('').removeClass('error');
        }
        if ($email.hasClass('success')) {
            $email.val('').removeClass('success');
        }
    });
    // Subscribe form when submit to database
    jQuery('.assan-newsletter').submit(function () {
        var $email = $(this).find('input[name="email"]');
        var $submit = $(this).find('input[name="submit"]');
        var email_pattern = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
        if (email_pattern.test($email.val()) === false) {
            $email.val('Please enter a valid email address!').addClass('error');
        } else {
            var submitData = $(this).serialize();
            $email.attr('disabled', 'disabled');
            $submit.attr('disabled', 'disabled');
            $.ajax({// Subcribe process with AJAX
                type: 'POST',
                url: 'mailchimp/process-subscribe.php',
                data: submitData + '&action=add',
                dataType: 'html',
                success: function (msg) {
                    if (parseInt(msg, 0) !== 0) {
                        var msg_split = msg.split('|');
                        if (msg_split[0] === 'success') {
                            $submit.removeAttr('disabled');
                            $email.removeAttr('disabled').val(msg_split[1]).addClass('success');
                        } else {
                            $submit.removeAttr('disabled');
                            $email.removeAttr('disabled').val(msg_split[1]).addClass('error');
                        }
                    }
                }
            });
        }

        return false;
    });
    
/** product single slider**/
$(document).ready(function() {
  $("#product-single").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
});