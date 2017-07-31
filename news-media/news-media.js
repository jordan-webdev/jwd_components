(function($) {

  /* ********** *CATEGORY SELECT + DESCRIPTION ******************* */

  // Ajax load content on link click
  $('body').on('click', '#categories a, .js-blog-ajax-link, .pagination-wrapper a', function(e){
    var slug = $(this).attr('data-slug');
    var href = $(this).attr('href');
    var target = $('.js-ajax-content-container');
    var singleSlug = $(this).attr('data-single-slug');

    //Results
    target.fadeOut();
    target.load(href + ' .js-category-results', function(){
      //var newURL = singleSlug ? '/new_era/blog/' + slug + '/' + singleSlug:  '/new_era/blog/' + slug + '/';
      var getUrl = window.location;
      var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
      //var newURL = href.replace(baseUrl, '');
      var newURL = href.replace('https://dolcedev.com', '');
      window.history.replaceState( {} , '', newURL );

      //Give phones some extra time to load
      let mq = window.matchMedia( "(max-width: 450px)" );
      if (mq.matches){
        setTimeout(function(){
          target.fadeIn('slow');
        }, 200);
      }else{
        target.fadeIn('slow');
      }

    });

    //Pagination
    var paginationTarget = $('.ajax-pagination');
    paginationTarget.fadeOut();
    paginationTarget.load(href + ' .js-ajax-pagination', function(){
      paginationTarget.fadeIn();
    });

    //Document title
    $('title').load(href + ' title', function(data){
       document.title = $(this).text();
    })

    //Scroll page
    $('html,body').animate({ scrollTop: ($('#category-wrapper').offset().top - 150) }, 'slow');

    return false;
  });

  // Color highlighting
  $('#categories span').click(function() {
    $('#categories span.color-primary').removeClass('color-primary');
    $(this).addClass('color-primary');
  });

  $('body').on('click', '.js-blog-ajax-link', function(){
    var slug = $(this).attr('data-slug');
    $('#categories span.color-primary').removeClass('color-primary');
    $('#categories span[data-slug="' + slug + '"]').addClass('color-primary');
  })

  //Categories dropdown
  var mq = window.matchMedia("(max-width: 850px)");
  if (mq.matches) {
    $('#categories-wrapper').slideUp(1, function(){});
    $('.js-categories-wrapper-toggle, .js-category-selector-link').on('click', function(){
      $('#categories-wrapper').slideToggle();
      $('.js-categories-wrapper-toggle').toggleClass('active');
    });
  }

})(jQuery)
