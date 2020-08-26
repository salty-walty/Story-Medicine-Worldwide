export default {
  init() {
    // JavaScript to be fired on all pages
    jQuery(document).ready(function() {

        let w = jQuery(window).width();

        if ( w < 852) {
          jQuery('#menu-main-menu').children('.menu-item-has-children').children('a').click(function(e) {
            e.preventDefault();
            console.log('clicked!')
            jQuery('.menu-item-has-children').not(jQuery(this).parent('.menu-item-has-children')).each(function() {
              if(jQuery(this).hasClass('open')) {
                jQuery(this).children('.sub-menu').slideToggle('fast');
                jQuery(this).removeClass('open');
              }
            });
            jQuery(this).parent('.menu-item-has-children').children('.sub-menu').slideToggle('fast');
            jQuery(this).parent('.menu-item-has-children').toggleClass('open');
          });
          jQuery('#menu-main-menu').children('.menu-item-has-children').children('.sub-menu').children('.menu-item-has-children').children('a').click(function(e) {
            e.preventDefault();
            jQuery(this).parent('li').children('ul.sub-menu').slideToggle('fast');
            jQuery(this).parent('li').toggleClass('open');
          });
        }

        jQuery('.shumshmainer').children(':checkbox').on('click', function(){
          $(this).parent().toggleClass('fit-it');
        });

        $(':checkbox').on('click', function(){
          $(this).parent().toggleClass('fit-it');
        });

        jQuery('.full-wide').click(function() {
          jQuery(this).toggleClass('wide-open');
        });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
