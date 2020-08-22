$('.text-toggle').click( function( event ) {
	$('.text').hide();
	$( $(this).attr('href') ).show();
} );
function noSpam(user,domain) {
	locationstring = 'mailto:' + user + '@' + domain;
	window.location = locationstring;
}
(function($){	
	$.fn.fullscreenr = function(options) {
		var defaults = { width: 1280,  height: 1024, bgID: 'bgimg' };
		var options = $.extend({}, defaults, options); 
		$(document).ready(function() { $(options.bgID).fullscreenrResizer(options);	});
		$(window).bind("resize", function() { $(options.bgID).fullscreenrResizer(options); });		
		return this; 		
	};
	$.fn.fullscreenrResizer = function(options) {
		// Set bg size
		var ratio = options.height / options.width;	
		// Get browser window size
		var browserwidth = $(window).width();
		var browserheight = $(window).height();
		// Scale the image
		if ((browserheight/browserwidth) > ratio){
			  $(this).height(browserheight);
			  $(this).width(browserheight / ratio);
		} else {
			  $(this).width(browserwidth);
			  $(this).height(browserwidth * ratio);
		}
		// Center the image
		$(this).css('left', (browserwidth - $(this).width())/2);
		$(this).css('top', (browserheight - $(this).height())/2);
		return this; 		
	};
})(jQuery);
jQuery.fn.fullscreenr({width: 1600, height: 946, bgID: '#background' });
jQuery.fn.fullscreenr({width: 4000, height: 2365, bgID: '#background-big' });
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-4614794-1']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();