export default {
  init() {
    // JavaScript to be fired on all pages
    jQuery(document).ready(function() {
        jQuery('.toggle-nav').click(function(e) {
          jQuery('.menu.main ul').slideToggle(500);
          jQuery('.toggle-nav').toggleClass('nav-clicked');
          jQuery('.nav-clicked').html('&#215;');
          jQuery('.nav-clicked').click(function(e){
            jQuery('.toggle-nav').html('&#9776;');
            e.preventDefault();
          })
            e.preventDefault();
        });
        
        jQuery('.full-wide').click(function() {
          jQuery(this).toggleClass('wide-open');
        });
        // jQuery( 'ul.products li.product' ).addClass( 'pretty-wrap' );
        // jQuery( 'li.pretty-wrap' ).wrap( '<div class="archive-img-wrap"/>' );
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
