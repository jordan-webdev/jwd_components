(function($) {
  $('.js-load-more').on('click', function() {
    var button = $(this);
    var buttonWrapper = $(this).parent();
    var currentPage = $(this).attr('data-page');
    var currentURL = window.location.href;
    var nextPageURL = currentURL.split('page/')[0] + 'page/' + (parseInt(currentPage) + 1);
    var selector = $(this).attr('data-selector');

    //Update the current page
    $(this).attr('data-page', parseInt(currentPage) + 1);

    //Show / hide the loader
    var loader = $(this).next('.load-more__loader');
    loader.addClass('active');

    $.get(nextPageURL, function(data){

      data = $(data).find(selector);
      $(selector).last().after(data);
      loader.removeClass('active');

      var nextPageURL = currentURL.split('page/')[0] + 'page/' + (parseInt(currentPage) + 2);
      console.log(nextPageURL);
      //Check if there's more content on the next page. If not, remove the button
      $.get(nextPageURL, function(data){
        data = $(data).find(selector);
        if (data.length == 0){
          buttonWrapper.animate({
            height: 0,
            padding: 0,
            margin: '0 auto'
          }, 400, function(){
            $(this).remove();
          });
        }
      });

    });

  })
})(jQuery)
