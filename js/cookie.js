!function ($) {
	var clientInfo = {
	  browserWidth: Modernizr.screen.windowWidth,
	  browserHeight: Modernizr.screen.windowHeight,
	  flexboxSupport: Modernizr.flexbox,
	  SVGSupport: Modernizr.svg
	};
	$.cookie.json = true;
	$.cookie($(document).data('cookiename'), clientInfo, {
		expires: 1,
		path: '/'
	});
}(window.jQuery || window.Zepto);