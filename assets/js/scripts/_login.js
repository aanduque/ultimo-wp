/**
 * Login Script
 * Loaded on the login screen page
 */
(function($) {

  // Ajust input labels
  (function ajustInputs() {
    
    // Main Container
    var container = $('#loginform');
    
    // Get Label Inputs
    container.find('label').each(function() {
      var input = $(this).find('input');
      
      $(this).before(input);
      $(this).parent().addClass('input-field');
    });
    
  })();
  
  // Ajusts remember
  $('.forgetmenot')
    .removeClass('forgetmenot')
    .removeClass('input-field')
    .addClass('remember-me-block');
  
  // Move nav to the main block
  $('#nav').insertAfter('#loginform p:last-child');
  
})(jQuery);