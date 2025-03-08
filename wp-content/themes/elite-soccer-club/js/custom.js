function elite_soccer_club_navigation_open() {
    jQuery(".side_gb_nav").addClass('show');
}
function elite_soccer_club_navigation_close() {
    jQuery(".side_gb_nav").removeClass('show');
}

jQuery(function($){
    $('.gb_toggle').click(function () {
        elite_soccer_club_keyboard_navigation_loop($('.side_gb_nav'));
    });
});
jQuery('document').ready(function(){
    window.addEventListener('load', (event) => {
        jQuery(".loading").delay(2000).fadeOut("slow");
    });

    //* Navbar Fixed  
    function elite_soccer_club_navbarFixed(){
        if ( jQuery('.nav-stick.is-sticky-on').length ){ 
            jQuery(window).on('scroll', function() {
                var scroll = jQuery(window).scrollTop();   
                if (scroll >= 295) {
                    jQuery(".nav-stick.is-sticky-on").addClass("header-fixed");
                } else {
                    jQuery(".nav-stick.is-sticky-on").removeClass("header-fixed");
                }
            });  
        };
    }

    elite_soccer_club_navbarFixed();
});
jQuery(document).ready(function($) {
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});


jQuery('document').ready(function(){
  var owl = jQuery('#home_slider .owl-carousel');
    owl.owlCarousel({
    margin:0,
    nav: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: false,
    navText : ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

    window.addEventListener('load', (event) => {
    jQuery(".loading").delay(2000).fadeOut("slow");
});
    
// Header search js

document.addEventListener('DOMContentLoaded', function () {
    const searchIcon = document.getElementById('search-icon');
    const searchPopup = document.getElementById('search-popup');
    const closePopup = document.getElementById('close-popup');
    const focusableElementsSelector = `input, button, [tabindex]:not([tabindex="-1"])`;
    let focusableElements, firstFocusableElement, lastFocusableElement;

    function elite_soccer_club_updateFocusableElements() {
        focusableElements = searchPopup.querySelectorAll(focusableElementsSelector);
        firstFocusableElement = focusableElements[0];
        lastFocusableElement = focusableElements[focusableElements.length - 1];
    }

    // Open Popup
    function elite_soccer_club_openPopup() {
        searchPopup.style.display = 'flex';
        searchPopup.setAttribute('aria-hidden', 'false');
        elite_soccer_club_updateFocusableElements();
        //firstFocusableElement.focus();
        document.addEventListener('keydown', elite_soccer_club_trapFocus);
    }

    // Close Popup
    function elite_soccer_club_closeSearchPopup() {
        searchPopup.style.display = 'none';
        searchPopup.setAttribute('aria-hidden', 'true');
        document.removeEventListener('keydown', elite_soccer_club_trapFocus);
        searchIcon.focus();
    }

    // Trap Focus within Popup
    function elite_soccer_club_trapFocus(e) {
        if (e.key === 'Tab') {
            if (e.shiftKey) {
                // If Shift + Tab is pressed
                if (document.activeElement === firstFocusableElement) {
                    e.preventDefault();
                    lastFocusableElement.focus();
                }
            } else {
                // If Tab is pressed
                if (document.activeElement === lastFocusableElement) {
                    e.preventDefault();
                    firstFocusableElement.focus();
                }
            }
        } else if (e.key === 'Escape') {
            // Close on Escape
            elite_soccer_club_closeSearchPopup();
        }
    }

    // Event Listeners
    searchIcon.addEventListener('click', elite_soccer_club_openPopup);
    searchIcon.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') elite_soccer_club_openPopup();
    });

    closePopup.addEventListener('click', elite_soccer_club_closeSearchPopup);
    closePopup.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') elite_soccer_club_closeSearchPopup();
    });

    searchPopup.addEventListener('click', function (e) {
        if (e.target === searchPopup) {
            elite_soccer_club_closeSearchPopup();
        }
    });
});