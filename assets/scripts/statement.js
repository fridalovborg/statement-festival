(function($) {

	// MOBILE MENU
	$( '.mobile-menu-toggle' ).click(function() {
		
		$('body').toggleClass('menu-active');

		$('.menu').toggleClass('active');
		
		if ($( '.menu' ).hasClass( 'active' )) {
			$('.menu').animate({
				left: '0'
			}, 500);
		} else {
			$('.menu').animate({
				left: '-100%'
			}, 500);
		}
	});

	// cookie notification
	if(localStorage.getItem('notificationShown') === 'false') {
		console.log('1');
		// display cookie message
		$( '.cookie' ).click(function() {
			localStorage.setItem('notificationShown', true);
			$( '.cookie-note' ).fadeOut();
		});
	} else {
		console.log('2');
		$( '.cookie-note' ).hide();
	}

})(jQuery);