/**
 * Admin Script
 * This is the script that gets loaded on the admin side.
 */
(function($) {
  $(document).ready(function() {
    
    /**
     * Ajust Tooltip
     */
    (function addTooltip() {
      $('.tooltiped.tooltip-ajust').each(function() {
        var $target = $(this).find('> a, > div');
        var tooltip = $target.attr('title');
        $target.removeAttr('title');
        $(this).attr('data-tooltip', tooltip);
      });
    })();


    /**
     * Initialize Plugins
     */
    // Parallax
    $('.parallax').parallax();
    // Tooltip 
    $('.tooltiped').tooltip({delay: 50, position: 'bottom', tooltip: function() {
      return $(this).attr('title');
    }});

    /**
     * Move Footer to inside the block 
     */
    (function ajustSelect() {
      // Material Select 
      // $('select.material-select').material_select();
    })();

    /**
     * Add Wave classes to buttons
     */
    (function ajustButtons() {
      //$('.button').addClass('btn btn-flat waves-effect waves-light');
    })();

    /** 
     * Add classes to admin menu
     */
    (function ajustAdminMenu() {
      //          $('#adminmenu').addClass('side-nav fixed');
      //          
      //          // Initialize collapse button
      //          $(".button-collapse").sideNav();
      //          // Initialize collapsible
      //          $('.collapsible').collapsible();

      // Deleta collapsible
      $('#collapse-menu').remove();

      // Ajusts of the collapsible
      // class="collapsible" data-collapsible="accordion"
      var $hasSubmenu = $('.wp-has-submenu');

      $hasSubmenu.each(function() {
        // Pegamos menu top
        $(this)
        .find('.menu-top')
        .click(function(e) {e.preventDefault();})
        .addClass('collapsible-header')
        .end()
        // Pegaos submenu
        .find('.wp-submenu')
        .addClass('collapsible-body')
        .end();
      });

      // Ativa collapsible
      $('#adminmenu').collapsible({
        accordion: true
      });
    })();

    /**
     * Solidify Header
     */
    (function solidifyHeader() {
      // get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
      var mainbottom = $('.parallax-container').offset().top + $('.parallax-container').height() - 155;
      var solid = 'z-depth-1 material-admin-primary-color-bg';

      function checkOpacity(){
        // we round here to reduce a little workload
        stop    = Math.round($(window).scrollTop());
        percent = 0.8 - (stop / mainbottom);
        // console.log(percent);

        // change image opacity
        $('.parallax-container').find('img.parallax-img').css('opacity', percent);

        if (stop > mainbottom) {$('#wpadminbar').addClass(solid);}
        else {$('#wpadminbar').removeClass(solid);}
      }

      // on scroll, 
      $(window).on('scroll', checkOpacity);
      // Run onload
      checkOpacity();

    })();

    /**
     * Ajust forms inputs so they can fit our scripts
     */

    // Ajust checkboxes and radio buttons
    (function ajustCheckboxes() {
      var $label = $('label');

      $label.each(function() {
        var $input = $(this).find('input[type="checkbox"], input[type="radio"]');
        $input.insertBefore($(this));

        // add for attr
        $(this).attr('for', $input.attr('id'));
      });

      // Add gap
      $('input[type="radio"]').addClass('with-gap');
    })();

    // Ajust Inputs across the app
    (function ajustTextarea() {
      $('textarea').addClass('materialize-textarea');
    })();

    // Ajust Inputs across the app 
    function ajustTextInputs() {
      // get tables
      var $line = $('table.form-table tr');

      // For each tr, finds th, gets label and copy it to td
      $line.each(function() {
        $(this).find('label').prependTo($(this).find('td'));

        // Add inout field only in input text, password cases
        if ($(this).find('input').attr('type') === 'text' || $(this).find('input').attr('type') === 'password') {
          $(this).find('td').addClass('input-field');
        }
      });

      // Deletes TH
      $line.find('th').remove();

    }
    
  });
})(jQuery);