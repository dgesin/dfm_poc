// HANDLEBARS HELPERS
Handlebars.registerHelper('unless_blank', function(item, block) {
  return (item && item.replace(/\s/g,"").length) ? block.fn(this) : block.inverse(this);
});

// ISCROLL ACTIVATION


// DOC
;(function (window, document, $) {
	
	// Variables & settings
	/////////////////////////////////
	var baseURL = $('body').data('baseurl'),
		currentURL = $('body').data('currenturl'),
		currentLatestFeed,
		scroller,
		optionsScroller,
		menuPosition,
		menuWidth = 260;
	
	document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

	// Menu & Navigation
	/////////////////////////////////
	// $('.navbar-toggle').click(function(e){
	// 	e.preventDefault();
	// 	$('body').toggleClass('active');
	// });
	// $('#sideMainNav').click(function(e){
	// 	e.preventDefault();
	//  		$('body').removeClass('active'); 
	// 	$(this).find('li').removeClass('active');
	// 	$(e.target).parent().addClass('active');
	// 	var s = e.target.href.split('#');
	// 	$('.category').html('<h4>' + s[1] + '</h4>');
	// 	var urls = e.target.title.split(',');
	// 	loadLatest(baseURL + '/inc/feed.php?feed=' + urls[0]);
	// });
	
	// Menu & Navigation
	/////////////////////////////////
	$('.navbar-toggle').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$('body').toggleClass('active');
	});
	
	
	$('.back-btn').click(function(e) {
		e.preventDefault();
		menuPosition += menuWidth;
		$('.menu-scroller').css({ 'left' : menuPosition });
		if(menuPosition == 0) {
			$('.side-nav').removeClass('back-button-in');
		}
	});
	
    menuClickHandler();

	function menuClickHandler() {
		$('.side-nav ul a').unbind('click');
		$('.side-nav ul a').click(function(e) {
			e.preventDefault();
			if(e.target.className.indexOf('favorite') > -1) {
				// FAVORITE SELECTED
				console.log('seleted favorite');
				$(e.target).toggleClass('selected');
				parent = $($(e.target).parent().parent()).clone();
				$('#sideMainNav').append(parent);
				menuClickHandler();
			} else if(e.target.title.indexOf('submenu') > -1) {
				console.log('clicked submenu menu item: ' + e.target.title);
				var strstr = e.target.title.split(',');
				var revealSection = '#menu-' + strstr[1];
				$('.submenu1').removeClass('active');
				$(revealSection).addClass('active');
				console.log("section: " + revealSection);
				menuPosition = parseInt($('.menu-scroller').css('left')) - menuWidth;
				$('.menu-scroller').css({ 'left' : menuPosition });
				$('.side-nav').addClass('back-button-in');
			} else {
				console.log('load up: ' + e.target.href);
				$('.navbar-toggle').removeClass('active');
				$('body').removeClass('active'); 
				$('.side-nav li').removeClass('active');
				$(e.target).parent().addClass('active');
				var s = e.target.href.split('#');
				var sectionName = capitaliseFirstLetter(s[1]);
				$('#section-head').html('<h4>' + sectionName + '</h4>');
				var urls = e.target.title.split(',');
				loadLatest(baseURL + '/inc/feed.php?feed=' + urls[0]);
			}
		});
	}
	
	// Search
	/////////////////////////////////
	if($('.search-toggle').length) {
		$('.search-toggle').click(function(e) {
			e.preventDefault();
			$(this).toggleClass('active');
			$('.mobile-search').toggleClass('reveal');
			$('#content').toggleClass('mobile-search-in');
		});
	}
	
	// User Settings
	/////////////////////////////////
	if($('.settings-toggle').length) {
		$('.settings-toggle').click(function(e) {
			e.preventDefault();
			if($('.site-settings').hasClass('active')) {
				$('.site-settings').removeClass('active');
			} else {
				$('.site-settings').addClass('active');
				// setTimeout(function () {
				// 	$('.site-settings').addClass('in');
				// 	activateOptionsScroller();
				// }, 300);
			}
		});
	}
	function activateOptionsScroller() {
		if(optionsScroller === undefined) {
			setTimeout(function () {
				optionsScroller = new iScroll('options');
				$('#options').find('.close').click(function(e){
					e.preventDefault();
					$('.site-settings').removeClass('active').removeClass('in');
				});
			}, 200);
		}
	}
	
	//iScroll function for content
	function loadMyScroll(){
		var pullDown = $('#pulldown'),
			pullDownOffset = pullDown.offset(),
			pullDownOffsetTop = pullDownOffset.top;
		setTimeout(function () {
			scroller = new iScroll('content', {
				useTransition: true,
				topOffset: pullDownOffsetTop,
				onRefresh: function () {
					if (pullDown.hasClass('loading')) {
						pullDown.find('.pulldown-label').html('Pull down to refresh...');
					}
				},
				onScrollMove: function () {
					$('.pulldown-icon').css({'display' : 'block'});
					if (this.y > 5 && !pullDown.hasClass('flip')) {
						pullDown.addClass('flip');
						pullDown.find('.pulldown-label').html('Release to refresh...');
						this.minScrollY = 0;
					} else if (this.y < 5 && pullDown.hasClass('flip')) {
						pullDown.removeClass('flip');
						pullDown.find('.pulldown-label').html('Pull down to refresh...');
						this.minScrollY = -pullDownOffsetTop;
					}
				},
				onScrollEnd: function () {
					if (pullDown.hasClass('flip')) {
						pullDown.addClass('loading');
						pullDown.find('.pulldown-label').html('Loading...');
						pullDownAction();	// Execute custom function (ajax call?)
					}
				}
			});
		}, 100);
	}
	function pullDownAction () {
		if(scroller !== null) {
			loadLatest(currentLatestFeed);
		}
	}

	// On load
	/////////////////////////////////
	loadLatest();
	
	function loadLatest(xmlFeed) {
		var source, template, html;
		var $target = $('#latest');
		$target.html('<div class="loading"></div>');
		if(scroller !== undefined) {
			scroller.destroy();
			scroller = null;
		}
		xF = (xmlFeed == undefined) ? baseURL + '/inc/feed.php?feed=dp-news-breaking' : xmlFeed;
		currentLatestFeed = xF;
		$.getJSON(xF, function(data) {
			source  = $("#latesttpl").html(),
			template = Handlebars.compile(source);
			html = template(data);
			$('body').removeClass('active');
			$target.html(html); // add to zone 1
			loadMyScroll(); // adds scrolling functions
		}); //getJSON
	}
	
	// Helpers
	/////////////////////////////////
	function capitaliseFirstLetter(string) {
	    return string.charAt(0).toUpperCase() + string.slice(1);
	}
	function getCheckedValue(radioObj) {
		if(!radioObj) { return ""; }
		var radioLength = radioObj.length;
		if(radioLength === undefined) {
			return (radioObj.checked) ? radioObj.value : "";
		}
		for (var i = 0; i < radioLength; i++) {
			if(radioObj[i].checked) {
				return radioObj[i].value;
			}
		}
		return "";
	}
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[#&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	function addCommas(nStr) {
		nStr += '';
		var x = nStr.split('.');
		var x1 = x[0];
		var x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}
	function formatDate(input) {
		var datePart = input.match(/\d+/g),
			months = new Array("", "Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec");	
			year = datePart[0],
			day = datePart[2],
			month = months[parseInt(datePart[1])];
		return month + ' ' + day + ', ' + year;
	}

}(this, document, window.jQuery || window.Zepto));




// --- REMOVING THIS FOR NOW

// var content,
//     header,
//     isOpen;


// content = $('#mobile-panel');
// header = $('#site-header');
// isOpen = 0;
// content.touchbar({
// 	content : '#mobile-panel',
// 	stop : 280
// });
// header.touchbar({
// 	content : '#site-header',
// 	stop : 280
// });


// // PANEL BEHAVIOR
// 	$('.navbar-toggle').click(function(e){
// 		e.preventDefault();
// 		$('body').toggleClass('active');
// 		// --- REMOVING THIS FOR NOW
// 		// isOpen = content.offset().left == 280;
// 		// content.trigger(isOpen ? 'close' : 'open');
// 		// header.trigger(isOpen ? 'close' : 'open');
// 	});
