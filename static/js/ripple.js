function showRipple() {
    var $window = $(window),
    thresh = $window.scrollTop() + $window.height();
    $('.ripple').each(function() {
      if ((thresh > $(this).offset().top)){
        $(this).addClass("ripple-parent");
      }
      // if ((thresh > $(this).offset().top) && 
      //   $(this).hasClass('pre-circles')) {
      //   // $(this).addClass('circles');
      // }
    });
  }
  
  $(window).on('scroll', function() {
    showRipple();
  });
  
  $(document).ready(function() {
    showRipple();
  });
  