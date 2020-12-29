(function($) {
    'use strict';

    //menu top fixed start for mobile menu & desktop menu
    var fixed_top = $(".header-bg");
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 10) {
            fixed_top.addClass("menu-fixed animated fadeInDown");
            fixed_top.removeClass("slideInUp");
        } else {
            fixed_top.removeClass("menu-fixed fadeInDown");
        }
    });

    // mobile menu responsive
    $(document).on('click', '.mobile-bar', function() {
        $(".mobile-bar").toggleClass("close");
        $(".main-menu").toggleClass("open");
        $(".overlay").addClass("active");
    });

    // overlay remove
    $('.overlay').on('click', function() {
        $('body,.main-menu,.mobile-bar').removeClass('close');
        $('body,.main-menu').removeClass('open');
        $('body,.main-menu,.overlay').removeClass('active');
    });

    //creating a style object for the ripple effect
    function RippleStyle(width, height, posX, posY) {
        this.width = (width <= height) ? height : width;
        this.height = (width <= height) ? height : width;
        this.top = posY - (this.height * 0.5);
        this.left = posX - (this.width * 0.5);
    }
    $('.btn').on('mousedown', function(e) {
        //appending an element with a class name "btn-ripple"
        var rippleEl = $('<span class="btn-ripple"></span>').appendTo(this);

        //getting the button's offset position
        var pos = $(this).offset();

        //get the button's width and height
        var width = $(this).outerWidth();
        var height = $(this).outerHeight();

        //get the cursor's x and y position within the button
        var posX = e.pageX - pos.left;
        var posY = e.pageY - pos.top;

        //adding a css style to the ripple effect
        var rippleStyle = new RippleStyle(width, height, posX, posY);
        rippleEl.css(rippleStyle);
    });

    //this event listener will be triggered once the ripple animation is done
    $('.btn').on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', '.btn-ripple', function() {
        $(this).remove();
    });

    // ====================================================================
    var counterUp = window.counterUp["default"]; // import counterUp from "counterup2"
    var $counters = $(".counter");

    /* Start counting, do this on DOM ready or with Waypoints. */
    $counters.each(function(ignore, counter) {
        var waypoint = new Waypoint({
            element: $(this),
            handler: function() {
                counterUp(counter, {
                    duration: 5000,
                    delay: 16
                });
                this.destroy();
            },
            offset: 'bottom-in-view',
        });
    });
    // ====================================================================

    // portfolio slider activetion
    var swiper = new Swiper('.portfolio-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        freeMode: true,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 3,
            },
            575: {
                slidesPerView: 2,
            }
        }
    });

    // Testimonial slide activetion
    var swiper = new Swiper('.testimonial-slider', {
        spaceBetween: 300,
        navigation: {
            nextEl: '.testi-next',
            prevEl: '.testi-prev',
        },
        pagination: {
            el: '.testi-pagination',
            clickable: true,
        },
        speed: 500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        loop: true,
    });

    //sponser slider activation
    var swiper = new Swiper('.sponsor-container', {
        slidesPerView: 2,
        speed: 1000,
        autoplay: 1000,
        autoplay: false,
        loop: true,
        freeMode: true,
        breakpoints: {
            1024: {
                slidesPerView: 5,
            },
            768: {
                slidesPerView: 4,
            },
            576: {
                slidesPerView: 3,
            },
            425: {
                slidesPerView: 2,
            }
        }
    });

    // scroll up start here
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.scrollToTop').css({ 'bottom': '2%', 'opacity': '1', 'transition': 'all .5s ease' });
            } else {
                $('.scrollToTop').css({ 'bottom': '-30%', 'opacity': '0', 'transition': 'all .5s ease' })
            }
        });
        //Click event to scroll to top
        $('.scrollToTop').on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 500);
            return false;
        });
    });

    // When any accordion title is clicked...
    $(".accordion_title").click(function() {
        const $accordion_wrapper = $(this).parent();
        const $accordion_content = $(this).parent().find(".accordion__content");
        const $accordion_open = "accordion--open";

        // If this accordion is already open
        if ($accordion_wrapper.hasClass($accordion_open)) {
            $accordion_content.slideUp(); // Close the content.
            $accordion_wrapper.removeClass($accordion_open); // Remove the accordionm--open class.
        }
        // If this accordion is not already open
        else {
            $accordion_content.slideDown(); // Show this accordion's content.
            $accordion_wrapper.addClass($accordion_open); // Add the accordion--open class.
        }
    });

    // lightcase activation//
    $('a[data-rel^=lightcase]').lightcase();
    $(window).on('load', function() {
        $('.preloader').fadeOut(1000);
    })


})(jQuery);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {

    $("#createMessage").submit(function(e) {
        e.preventDefault();



        var formData = new FormData(this);


        const newLocal = 'api/message';
        $.ajax({
            type: 'POST',
            url: newLocal,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(data) {


                swal('', 'Message successfully send', 'success');
                $("#createMessage input[type=text]").val('');
                $("#createMessage textarea").val('');

            }
        });

    });

});