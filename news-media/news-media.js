(function($){

	/* ********** *CATEGORY SELECT + DESCRIPTION ******************* */
	//All
	$('.all-categories-selector').click( function () {
			$('#categories span').removeClass('color-primary')
			$(this).addClass('color-primary');
			var allItems = $('.blog-item-wrapper');
			var theItem = allItems;
			showImages(allItems, theItem);
	});
	$('#category-wrapper h2').click( function () {
		toggleExpand( $('#categories'), $(this));
	});
	$('#categories span').click( function () {
		toggleExpand( $('#categories'), $('#category-wrapper h2'));
	});

	var mq = window.matchMedia( "(max-width: 800px)" );
	if ( mq.matches ) {
		$('#categories').css('top', '-' + $('#categories').height() + 'px');
	}

	function toggleExpand ( categories, arrowHeader ) {
		categories.toggleClass('expand-categories').toggleClass('expanded-categories');
		arrowHeader.toggleClass('rotate-arrow-after');
	}

	//News Media
	var newsCookie = Cookies.get('newsCookie');
	var newsCookieNice = Cookies.get('newsCookieNice');

	if (newsCookie) {
		$('#categories span:contains("' + newsCookie + '")').addClass('color-primary');
	}
	else {
		$('#categories span:first-child').addClass('color-primary');
	}
	var allPosts = $('.blog-item-wrapper');
	var thePosts = allPosts;

	if (newsCookieNice && newsCookieNice != 'all') {
		thePosts = $('.blog-item-wrapper.' + newsCookieNice);
	} else {
		//var thePosts = $('.blog-item-wrapper.' + $('#categories span:nth-child(2)').attr('data-category'));
		thePosts = allPosts
	}

	if (newsCookie == 'All') {
		thePosts = allPosts;
	}

	showImages(allPosts, thePosts);

	$('#categories span').click( function () {
		$('#categories span').removeClass('color-primary');
		$(this).addClass('color-primary');
		var thePosts = $('.blog-item-wrapper.' + $(this).attr('data-category') );
		showImages(allPosts, thePosts);
	})

	function showImages(allItems, theItem) {
		/* $('#ajax-loader').animate({
				opacity: 1
		}, 200); */
		allItems.each( function () {
			$(this).animate({
				opacity: 0
			}, 500, function () {
				$(this).css('display', 'none');
			});
		}).promise().done( function () {
			theItem.each( function () {
				var theImage = $(this).find('img');
				$(this).css('display', 'block');
				if (theImage.attr('src') == '') {
					theImage.attr('src', theImage.attr('data-src'));
				}
				$(this).animate({
					opacity: 1
				}, 500);
			}).promise().done( function () {
				/* $('#ajax-loader').animate({
					opacity: 0
				}, 200); */
			});
		});

	}

	//Single page

	if (newsCookieNice == 'all'){
		$('.blog-category').text('all categories');
	}
	$('#categories span').each(function(){
		$(this).removeClass('color-primary');
	});
	$('#categories span:contains("' + Cookies.get('newsCookie') + '")').addClass('color-primary');

	$('#categories span').click( function () {
		Cookies.remove('newsCookie');
		Cookies.set('newsCookie', $(this).text());
		Cookies.remove('newsCookieNice');
		Cookies.set('newsCookieNice', $(this).attr('data-category'));
	});

})(jQuery)
