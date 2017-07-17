(function($) {
  //load the image only when it's needed
  let mq = window.matchMedia("(min-width: 450px)");
  if (mq.matches) {
    var image = $('.product-description__image');
    var src = image.attr('data-src');
    image.attr('src', src);
  }

})(jQuery)
