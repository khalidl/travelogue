//***********************************************************************
//	1. On page load set the header height to the same height as the viewport.
//	When resizing the browser recalculate its height and apply the same
//	value to the header.
//
//	2. For the Archive page: when hovering over an item, highlight its
//	corresponding year.
//
//	updated: 2013-08-30 (Khalid Laouhi)
//***********************************************************************

$(document).ready(function() {
	// Set the article header to be the same height as the viewport window
	$('.js-bg').css('height', window.innerHeight+'px');

	// SMALLER VIEWPORT: Immediately change the header to a fixed height if below 481px
	var width = $(window).width();
	if (width < 481) {
		$('article header').css('height', '540px');
	}

	$(window).resize(function() {
		// Resize the header when resizing the viewport
		$('.js-bg').css('height', window.innerHeight+'px');

		// SMALLER VIEWPORT: When resizing below 481px, change the header to a fixed height
		var width = $(window).width();
		if (width <= 480) {
			$('article header').css('height', '540px');
		}
	});


	// Set a variable
	var item = $('.archive a');

	// When hovered, select its container, then select the h1, then apply a class
	item.hover(function() {
		$(this).parents('.group').children('h1').toggleClass('js-highlight');
	//	console.log("Check!");

	});
});
