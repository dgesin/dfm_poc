// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function noop() {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// HANDLEBARS HELPERS
Handlebars.registerHelper('unless_blank', function(item, block) {
  return (item && item.replace(/\s/g,"").length) ? block.fn(this) : block.inverse(this);
});

// INIT
;(function (window, document, $) {
	
	// Variables & settings
	/////////////////////////////////
	var baseURL = $(document).data('baseurl'),
		currentURL = $(document).data('currenturl'),
		currentLatestFeed,
		currentAltNewsFeed,
		currentTopNewsFeed,
		menuPosition,
		menuWidth = 260;
	$.ajaxSetup({ cache: false });

	// On resize
	/////////////////////////////////
	// for things that we want to happen after resize stops:
	$(window).smartresize( function(){
		checkResponsive();
	});
	// for things that we want to happen immediately:
	$(window).resize( function(){
		if($(window).width() > 768) {
			$('.navbar-toggle').removeClass('active');
			$('body').removeClass('active');
		}
	});
	
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
		$('.side-nav ul a').click(function(e){
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
				$('#section-head').html('<h3 class="section-header">' + sectionName + '</h3>');
				var urls = e.target.title.split(',');
				loadLatest(baseURL + '/inc/feed.php?feed=' + urls[0]);
				loadAltNews(baseURL + '/inc/feed.php?feed=' + urls[1]);
				loadTopNews(baseURL + '/inc/feed.php?feed=' + urls[2]);
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
			$('.inline-search').toggleClass('reveal');
			$('#content').toggleClass('mobile-search-in');
		});
	}

	// User Settings
	/////////////////////////////////
	if($('.settings-toggle').length) {
		$('.settings-toggle').click(function(e) {
			e.preventDefault();
		});
	}

	// On load
	/////////////////////////////////
	loadLatest();
	loadAltNews();
	loadTopNews();
	checkResponsive();

	// Functions
	/////////////////////////////////
	function checkResponsive() {

	}
	function loadLatest(xmlFeed) {
		var source, template, html;
		var $target = $('#latest').find('.feed');
		$target.html('<div class="loading"></div>');
		xF = (xmlFeed == undefined) ? baseURL + '/inc/feed.php?feed=dp-news-breaking' : xmlFeed;
		currentLatestFeed = xF;
		$.getJSON(xF, function(data) {
			source  = $("#latesttpl").html(),
			template = Handlebars.compile(source);
			html = template(data);
			$('body').removeClass('active');
			$target.html(html); // add to zone 1
			$target.find('.story-feed a').on('click', function(e){
				e.preventDefault();
				loadArticle(e.currentTarget.id);
			});
			$('#latest').find('.refresh').click(function(e){ 
				e.preventDefault();
				loadLatest(currentLatestFeed);
			});
		}); //getJSON
	}
	
	
	// <a href="link to story here" id="storyID" onclick="loadArticle(storyID)">Link</a>
	// find way to get id to load the story in OR find some way to pass in the description and title fields of the existing object to the function
	
	function loadArticle(id) {
		var source, template, html;
		var $target = $('#article-page').find('.container');
		document.getElementById("article-page").className = "active";
		$target.html('<div class="loading"></div>');
		pathToArticle = baseURL + '/inc/get-article.php?x=' + id;
		console.log(pathToArticle);
		$.getJSON(pathToArticle, function(data) {
			source  = $("#articletmp").html();
			template = Handlebars.compile(source);
			html = template(data);
			$target.html(html);
		}); //getJSON
	}
	function closeArticle(){
		var $target = $('#article-page').find('.container');
		document.getElementById("article-page").className = "close";
		$target.html ('<div class="loading"></div>');
	}

	function loadAltNews(xmlFeed) {
		var source, template, html;
		var $target = $('#popular').find('.feed');
		$target.html('<div class="loading"></div>');
		xF = (xmlFeed == undefined) ? baseURL + '/inc/feed.php?feed=dp-dontmiss' : xmlFeed;
		currentAltNewsFeed = xF;
		// need fade in, too
		$.getJSON(xF, function(data) {
			source  = $("#commtemp").html(),
			template = Handlebars.compile(source);
			html = template(data);
			$('body').removeClass('active'); // other way to handle this??? smoother trans
			$target.html(html); // add to zone 2
			$target.find('.story-feed a').on('click', function(e){
				e.preventDefault();
				loadArticle(e.currentTarget.id);
			});
			$('#popular').find('.refresh').click(function(e){ 
				e.preventDefault();
				loadAltNews(currentAltNewsFeed);
			});
		}); //getJSON
	}
	function loadTopNews(xmlFeed) {
		var source, template, html;
		var $target = $('#picks').find('.feed');
		$target.html('<div class="loading"></div>');
		xF = (xmlFeed == undefined) ? baseURL + '/inc/feed.php?feed=dp-news-topstories' : xmlFeed;
		currentTopNewsFeed = xF;
		// need fade in, too
		$.getJSON(xF, function(data) {
			source  = $("#editortemp").html(),
			template = Handlebars.compile(source);
			html = template(data);
			$('body').removeClass('active');
			$target.html(html); // add to zone 3
			$target.find('.story-feed a').on('click', function(e){
				e.preventDefault();
				loadArticle(e.currentTarget.id);
			});
			$('#picks').find('.refresh').click(function(e){ 
				e.preventDefault();
				loadTopNews(currentTopNewsFeed);
			});
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
}(this, document, window.jQuery||window.Zepto));