var toggle = $('.CLICKELEMENT');
var allContent = $('.REVEALEDCONTENT');

//The caret icon
var allIcons = $('.slide-toggle-icon');

//Hide the answers on load
allContent.slideUp(1);

//Slide the answers on click and toggle the icon
toggle.on('click', function() {
  var content = $(this).next('.vc_tta-panel-body');
  var icon = $(this).find('.slide-toggle-icon');

  if ($(this).hasClass('is-expanded')) {
    $(this).removeClass('is-expanded');
    icon.removeClass('is-active');
    content.slideUp();

  } else {
    toggle.filter('.is-expanded').removeClass('is-expanded');
    allIcons.filter('.is-active').removeClass('is-active');
    $(this).addClass('is-expanded');
    icon.addClass('is-active');
    allContent.slideUp();
    content.slideDown();
  }

  return false;
});
