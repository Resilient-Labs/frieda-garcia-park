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
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
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
jQuery(".hamburger-menu").on('click',function() {
  jQuery(".hamburger-nav").toggle("slow");
  jQuery("html, body").toggleClass("hidden-overflow");
})
/*
(() => {
 const lazyload = () => {
  // Test if image is in the viewport
  const isImageInViewport = (img) => {
   const rect = img.getBoundingClientRect();
   return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
   );
  }
  // Create custom fading effect for showing images
  const fadeInCustom = (element) => {
   let elementOpacity = 0.1;// initial opacity
   element.style.display = 'block';
   const timer = setInterval(() => {
    if (elementOpacity >= 1){
     clearInterval(timer);
    }
    element.style.opacity = elementOpacity;
    element.style.filter = 'alpha(opacity=' + elementOpacity * 100 + ")";
    elementOpacity += elementOpacity * 0.1;
   }, 15);
  };
  // lazyload function
  const lazyloadLoader = () => {
   const lazyImagesList = document.querySelectorAll('img[data-src]');
   lazyImagesList.forEach((image) => {
    if (isImageInViewport(image)) {
     if (image.getAttribute('data-src') !== null) {
      image.setAttribute('src', image.getAttribute('data-src'));
      image.removeAttribute('data-src');
     }
     if (image.getAttribute('data-srcset') !== null) {
      image.setAttribute('srcset', image.getAttribute('data-srcset'));
      image.removeAttribute('data-srcset');
     }
     image.setAttribute('data-loaded', true);
     fadeInCustom(image);
    }
   });
   // Remove event listeners if all images are loaded
   if (document.querySelectorAll('img[data-src]').length === 0 && document.querySelectorAll('img[data-srcset]')) {
    window.removeEventListener('DOMContentLoaded', lazyload);
    window.removeEventListener('load', lazyloadLoader);
    window.removeEventListener('resize', lazyloadLoader);
    window.removeEventListener('scroll', lazyloadLoader);
   }
  };
  // Add event listeners to images
  window.addEventListener('DOMContentLoaded', lazyloadLoader);
  window.addEventListener('load', lazyloadLoader);
  window.addEventListener('resize', lazyloadLoader);
  window.addEventListener('scroll', lazyloadLoader);
 }
 // Test if JavaScript is available and allowed
 if (document.querySelector('.no-js') !== null) {
  document.querySelector('.no-js').classList.remove('no-js');
 }
 // Initiate lazyload plugin
 return lazyload();
})();
*/
