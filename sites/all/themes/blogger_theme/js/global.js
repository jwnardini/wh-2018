(function($) {
	"use strict";
	$(document).ready(function(){
		// Main menu superfish
		$('#main-menu > ul').superfish({
			delay: 200,
			animation: {opacity:'show', height:'show'},
			speed: 'fast',
			cssArrows: false,
			disableHI: true
		});
		
		// Mobile Menu
		$('#navigation-toggle').sidr({
			name: 'sidr-main',
			source: '#sidr-close, #site-navigation',
			side: 'left',
			displace: false
		});
		$(".sidr-class-toggle-sidr-close").click( function() {
			$.sidr('close', 'sidr-main');
			return false;
		});

                                       var metaBondGifs = ($('meta')[1]['baseURI']);
                                       if (metaBondGifs == 'http://whathappending.com/bond-gifs') {
                                       $('meta').before('<meta property="og:image" content="http://whathappending.com/sites/default/files/kanangaballoon.png">');}
	}); // End doc ready
})(jQuery);