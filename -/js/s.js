//***********************************************************************
//	On load set the header height to the same height as the viewport.
//	When resizing the browser recalculate its height and apply the same
//	value to the header.
//***********************************************************************

$(document).ready(function() {
	$('.bg').css('height', window.innerHeight+'px');

	// SMALLER VIEWPORT: Immediately change the header to a fixed height if below 480px
	var width = $(window).width();
	if (width < 481) {
		$('article header').css('height', '540px');
	}

	$(window).resize(function() {
		$('.bg').css('height', window.innerHeight+'px');

		// SMALLER VIEWPORT: When resizing below 480px, change the the header to a fixed height
		var width = $(window).width();
		if (width <= 480) {
			$('article header').css('height', '540px');
		}
	});
});