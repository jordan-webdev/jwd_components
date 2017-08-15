(function($) {
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 150){
      $('#sticky-navigation').addClass('active');
    }else{
      $('#sticky-navigation.active').removeClass('active');
    }
  });
})(jQuery)
