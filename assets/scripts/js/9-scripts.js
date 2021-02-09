jQuery(function($) {

	if($('.single-article .content-wrap').length) {
		$('.single-article .content-wrap').slideUp();
		
		$(document).on('click', 'a#show-full-text', function(e){
			e.preventDefault();
			$('.single-article .content-wrap').slideDown(400);
			$('a#show-full-text').fadeTo(400, 0);
			$('a#show-full-text').css('cursor', 'default');
			console.log("loaded");
		});
		
	}
		
	if ( $('body').hasClass('single-article')) {
		$('#main-nav li.articles').addClass('current-menu-item');
	};

	if ( $('body').hasClass('single-event')) {
		$('#main-nav li.events').addClass('current-menu-item');
	};
	
});