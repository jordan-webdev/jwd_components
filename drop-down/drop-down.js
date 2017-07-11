//Req: animate.css
doDDL($('.drop-down__btn'), 'fadeInUp', 'fadeOutDown');

function doDDL(btn, animateIn, animateOut) {
  //Click animation
  btn.on('click', function() {
    var list = $(this).next('.drop-down__list');

    //Do not duplicate animations by clicking too fast
    if (list.hasClass('animating')) {
      return false;
    }
    list.addClass('animating');
    setTimeout(function() {
      list.removeClass('animating');
    }, 1000);

    //Toggle display:none on the element so it does not interfere with other HTML elements
    var addClass = list.hasClass(animateIn) ? animateOut : animateIn;
    var show = addClass == animateIn ? true : false;
    hideorShowDropDown(show);

    function hideorShowDropDown(show) {
      if (show) {
        $(list).show();
      } else {
        setTimeout(function() {
          $(list).hide();
        }, 1000);
      }
    }

    //Apply animation
    $(list).removeClass(animateIn + " " + animateOut).addClass(addClass);

    //Rotate the arrow
    var caret = $(this).find('.drop-down__caret');
    caret.toggleClass('active');

    //Click banner prerequisites
    var container = $(this).parent();
    var currentZIndex = $(this).css('z-index');
    container.css('z-index', '9999');

    //Click banner (toggle animation)
    if (!$('.click-banner').length > 0) {
      $(this).before('<button class="full-banner click-banner"><span class="screen-reader-text">Click to close drop down</span></button>');
      $('.click-banner').on('click', function() {
        //Do not duplicate animations by clicking too fast
        if (list.hasClass('animating')) {
          return false;
        }
        list.addClass('animating');
        setTimeout(function() {
          list.removeClass('animating');
        }, 1000);
        caret.toggleClass('active');
        hideorShowDropDown(false);
        $(list).removeClass(animateIn).addClass(animateOut);
        $(this).remove();
        container.css('z-index', currentZIndex);
      });
    } else {
      $('.click-banner').remove(); //Remove existing banner if the user clicks the button to close
    }

  }); //Button click
  
  //Show the dropdown for desktop
  var mq = window.matchMedia( "(min-width: 765px)" );
  if (mq.matches){
    btn.click();
  }

  //Match Widths
  $('.drop-down__list').each(function() {
    var btn = $(this).prev('.drop-down__btn');
    $(this).width(btn.outerWidth(true) - 2); //Account for 2px border
  });

}
