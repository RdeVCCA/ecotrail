function showImages() {
    var $window = $(window),
    thresh = $window.scrollTop() + $window.height();
    $('img:not(.fade-in-top)').each(function() {
      if ((thresh > $(this).offset().top + ($(this).outerHeight() / 4)) && 
        $(this).hasClass('small-image')) {
        $(this).addClass('fade-in-top');
        var $nextDiv = $(this).next('div.description-box');
        if ($nextDiv.length > 0) {
          $nextDiv.addClass('fade-in-bottom');
        }
      }
    });
  }
  
  $(window).on('scroll', function() {
    showImages();
  });
  
  $(document).ready(function() {
    showImages();
  });
  