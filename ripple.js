function showRipple() {
    var $window = $(window),
    thresh = $window.scrollTop() + 1.5*$window.height();
    $('div:not(.circles)').each(function() {
      if ((thresh > $(this).offset().top) && 
        $(this).hasClass('pre-circles')) {
        $(this).addClass('circles');
      }
    });
  }
  
  $(window).on('scroll', function() {
    showRipple();
  });
  
  $(document).ready(function() {
    showRipple();
  });
  