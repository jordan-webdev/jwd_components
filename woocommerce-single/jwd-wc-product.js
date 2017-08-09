(function($) {

  checkFlexWrap();
  $(window).on('resize', function() {
    checkFlexWrap();
  });

  function checkFlexWrap() {
    if (is_wrapped('js-flex-compare')) {
      $('.js-flex-compare').addClass('is-wrapped');
      $('.jwd-wc-product-description').addClass('is-wrapped');
    } else {
      //$('.js-flex-compare').removeClass('is-wrapped');
      //$('.jwd-wc-product-description').removeClass('is-wrapped');
    }
  }

  $('.jwd-wc-product-description').addClass('is-loaded');

  //Match Product thumbs wrapper width with the larger image
  $('.jwd-wc-product-description__thumbs-wrapper').animate({
    height: $('.jwd-wc-product-description__thumbs').height()
  }, 250);

  //Gallery image rotations on click
  $('.js-jwd-wc-product-description__gallery-thumb').on('click', function() {
    var mainImage = $('.js-jwd-wc-product-description__gallery-main');
    var mainGalleryLink = mainImage.parent('a');
    var mainFull = mainImage.attr('data-full');
    var mainLarge = mainImage.attr('data-large');
    var mainMedium = mainImage.attr('data-medium');
    var thisFull = $(this).attr('data-full');
    var thisLarge = $(this).attr('data-large');
    var thisMedium = $(this).attr('data-large');
    var thisIndex = $(this).index();

    //The main image becomes clicked image
    mainImage.attr('src', thisLarge);
    mainImage.attr('data-full', thisFull);
    mainImage.attr('data-large', thisLarge);
    mainImage.attr('data-medium', thisMedium);
    mainGalleryLink.attr('href', thisFull);

    //The current image becomes the main image
    $(this).attr('src', mainMedium);
    $(this).attr('data-full', mainFull);
    $(this).attr('data-large', mainLarge);
    $(this).attr('data-medium', mainMedium);

    //Update the corresponding hidden link
    thisFull = $(this).attr('data-full'); //Get updated value
    console.log($('.js-jwd-wc-product-description__hidden-link').eq(thisIndex));
    $(this).parent().next('.js-jwd-wc-product-description__hidden-link').attr('href', thisFull);

  });

  //Update the Price
  var seenQty = $('.product-chart__qty');
  var hiddenQty = $('input[type="number"].qty');
  var seenPrice = $('.jwd-woocommerce-products__price-amt');
  var hiddenPrice = $('.price.final');
  var option = $('.product-chart__field');

  is_present('.price.final', function() {
    updatePrice();
  });

  function is_present(el, callback) {
    if ($(el).length > 0) {
      callback();
    } else {
      setTimeout(function() {
        is_present(el, callback);
      }, 10)
    }
  }

  function updatePrice() {
    $('.price.final').on('remove', function() {
      setTimeout(function() {
        var price = $('.price.final').text();
        //Remove currency symbol
        price = price.substring(1, price.length);
        $('.jwd-woocommerce-products__price-amt').text(price);
        is_present('.price.final', function() {
          updatePrice();
        });
      }, 300);
    });
  }

  hiddenQty.on('change', function() {
    setTimeout(function() {
      var price = $('.price.final').text();
      //Remove currency symbol
      price = price.substring(1, price.length);
      seenPrice.text(price);
    }, 100);

  });

  seenQty.on('change', function() {
    $('input[type="number"].qty').attr('value', $(this).val());
    $('input[type="number"].qty').change();
  })

  //Add to cart click
  $('.product-chart__add-btn').on('click', function() {
    $('.single_add_to_cart_button').click();
  });

  //Equal width labels
  var greatestWidth = 0;
  $('.tm-epo-field-label, .product-chart__specification-label').each(function() {
    var width = $(this).width();
    greatestWidth = width > greatestWidth ? width : greatestWidth;
  });
  $('.tm-epo-field-label, .product-chart__specification-label').width(greatestWidth);

  //Add price addition to Select Options
  var currency = $('.jwd-woocommerce-products__currency-symbol').first().text();
  $('select.tmcp-field option').each(function() {
    var price = $(this).attr('data-price');
    price = price == "" ? "0.00" : price;
    var newText = $(this).text() + ' (+' + currency + price + ')';
    $(this).text(newText);
  });

  //Scrolling up-arrow module
  $(window).on('scroll', function(){
    var windowTop = $(this).scrollTop();
    var threshold = 1700;
    var showItem = $('.up-arrow');

    let mq = window.matchMedia( "(min-width: 800px)" );

    if (windowTop > threshold && mq.matches){
      showItem.addClass('is-active');
    }else if (windowTop < (threshold - 100)){
      showItem.removeClass('is-active');
    }
  })

  //Collapse toggles
  let mq = window.matchMedia( "(max-width: 900px)" );
  if (mq.matches){
    $('.product-chart__collapse-area').slideToggle(1);

    $('.product-chart__collapse-toggle').on('click', function(){

        var delayed_slide_start = 550;

        // Scroll to the top first to avoid issued with scroll and expanding
        $('html, body').animate({
          scrollTop: $('.product-chart__information').offset().top,
        }, delayed_slide_start);


      var toggleChevron = $(this).find('.fa');
      $('.product-chart__collapse-toggle .fa').not(toggleChevron).addClass('fa-chevron-up').removeClass('fa-chevron-down');
      toggleChevron.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
      var toggleItem = $(this).parent().next('.product-chart__collapse-area');
      $('.product-chart__collapse-area').not(toggleItem).slideUp(500);

      // Expand/collapse the container and scroll to it
      var anchor_point_selector = $(this).parent();

      toggleItem.slideToggle(delayed_slide_start, function(){
        $('html, body').animate({
          scrollTop: anchor_point_selector.offset().top,
        }, 500);
      });



    });
  }

})(jQuery)
