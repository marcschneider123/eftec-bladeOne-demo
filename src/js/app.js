/**
 * Load all of this project's JavaScript dependencies
 */
require('./bootstrap');

(function ($) {
    "use strict"; // Start of use strict
    window.FontAwesomeConfig.searchPseudoElements = true;

    // Smooth scrolling
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 750, "swing");
                return false;
            }
        }
    });

    // Activate scrollspy to add active class to navbar items on scroll
    /* $('body').scrollspy({
         target: '#mainNav',
         offset: 54
     });*/

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };

    //navbar collapse if page has navbar
    if ($("#mainNav").length) {
        // Collapse now if page is not at top
        navbarCollapse();
        // Collapse the navbar when page is scrolled
        $(window).scroll(navbarCollapse);
    }
})(jQuery); // End of use strict
