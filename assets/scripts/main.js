/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        //Add shrinking to menu on scroll
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.img-logo').addClass('shrink');
            } else {
                $('.img-logo').removeClass('shrink');
            }
        });
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS

        //Owl carousel configuration
        $('.owl-one').owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            dots: false
        });

        $('.owl-two').owlCarousel({
          items:1,
          loop:true,
          autoplay:true,
          autoplayTimeout:3000
        });

        $('.owl-three').owlCarousel({
          items:1,
          loop:true,
          autoplay:true,
          autoplayTimeout:7000,
          margin: 10
        });
      }
    },
    // Us page
    'nosotros': {
        init: function() {
            // JavaScript to be fired on the home page
        },
        finalize: function() {
          $('.owl-one').owlCarousel({
              items:1,
              loop:true,
              autoplay:true,
              autoplayTimeout:3500,
              dots: false
          });

          $('.owl-two').owlCarousel({
              loop:true,
              autoplay:true,
              autoplayTimeout: 4000,
              margin: 30,
              responsive: {
                  0: {
                      items: 1
                  },
                  425: {
                      items: 2
                  },
                  768: {
                      items: 3
                  },
                  1024: {
                      items: 4
                  }

              }
          });

          $('.owl-three').owlCarousel({
              loop:true,
              autoplay:true,
              autoplayTimeout: 6000,
              margin: 30,
              responsive: {
                  0: {
                      items: 1
                  },
                  425: {
                      items: 2
                  },
                  768: {
                      items: 3
                  },
                  1024: {
                      items: 4
                  }

              }
          });
        }
    },
    'educacion': {
      init: function() {

      },
      finalize: function() {
          // init Isotope
          var $grid = $('.grid').isotope({
              itemSelector: '.element-item',
              layoutMode: 'fitRows',
              filter: '*'
          });

          // bind filter button click
          $('#filters').on( 'click', 'button', function() {
              var filterValue = $( this ).attr('data-filter');
              $grid.isotope({ filter: filterValue });
          });

          // change is-checked class on buttons
          $('.button-group').each( function( i, buttonGroup ) {
              var $buttonGroup = $( buttonGroup );
              $buttonGroup.on( 'click', 'button', function() {
                  $buttonGroup.find('.is-checked').removeClass('is-checked');
                  $( this ).addClass('is-checked');
              });
          });
      }
    },
    'lo-nuevo': {
      init: function() {

      },
      finalize: function() {

      }
    },
    'exhibiciones': {
        init: function() {

        },
        finalize: function() {
            lightbox.option({
                'wrapAround': true,
                'albumLabel': "Imagen %1 de %2"
            });
        }
    },
  // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
