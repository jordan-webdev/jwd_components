//RELATED ITEMS
$('.js-related-items__list').owlCarousel({
  margin: 10,
  nav: true,
  arrows: true,
  navText: ['<button type="button" class="owl-prev"><span class="fa fa-chevron-left"></span> Prev</button>','<button type="button" class="owl-next">Next <span class="fa fa-chevron-right"></span></button>'],
  responsive: {
    1050: {
      items: 3
    },
    620: {
      items: 2,
    },
    0: {
      items: 1,
    }
  }
});
