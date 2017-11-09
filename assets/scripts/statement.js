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
})(jQuery);