;(function (window, document, $) {
	if($('.responsive').length) {
		var switched = false,
		var breakpoint = 767, // make global var somewhere in document, pass thru jQuery
		var updateTables = function() {
			if (($(window).width() < breakpoint) && !switched ){
				switched = true;
				$('table.responsive').each(function(i, element) {
					$(element).wrap('<div class="table-wrapper" />');
					var copy = $(element).clone();
					copy.find('td:not(:first-child), th:not(:first-child)').css('display', 'none');
					copy.removeClass('responsive');
					$(element).closest('.table-wrapper').append(copy);
					copy.wrap('<div class="pinned" />');
					$(element).wrap('<div class="scrollable" />');
				});
				return true;
			} else if (switched && ($(window).width() > breakpoint)) {
				switched = false;
				$('table.responsive').each(function(i, element) {
					$(element).closest('.table-wrapper').find('.pinned').remove();
					$(element).unwrap();
					$(element).unwrap();
				});
			}
		};
		$(window).load(updateTables);
		$(window).bind('resize', updateTables);
	}
}(this, document, window.jQuery || window.Zepto));