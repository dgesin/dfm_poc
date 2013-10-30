<nav id="sideMenu" class="side-nav" role="navigation">
	<header>
		<?php if ($mobile): ?>
		<?php include('temps/ui/svg/dplogo.php'); ?>
		<?php else: ?>
		<div class="category">
			<h4>Options</h4>
		</div>	
		<?php endif; ?> 
		<a class="settings-toggle" href="">
			<i class="glyphicon glyphicon-wrench"></i>
		</a>
		<a class="back-btn" href="">
			<i class="glyphicon glyphicon-chevron-left"></i>
		</a>
	</header>
	<div id="menu-wrapper">
		<div class="menu-scroller">
			<ul id="sideMainNav">
				<li class="active">
					<a href="#news" title="submenu,news">News <span style="pointer-events: none;" class="arrow glyphicon glyphicon-chevron-right"></span></a>
				</li>
				<li>
					<a href="#sports" title="submenu,sports">Sports <span style="pointer-events: none;"  class="arrow glyphicon glyphicon-chevron-right"></span></a>
				</li>
				<li>
					<a href="#life" title="dp-entertainment,dp-lifestyles-fitness,dp-entertainment">Life <!-- <span class="glyphicon glyphicon-chevron-right"></span> --></a>
				</li>
				<li>
					<a href="#opinion" title="dp-opinion,dp-opinion-editorials,dp-opinion-perspective">Opinion <!-- <span class="glyphicon glyphicon-chevron-right"></span> --></a>
				</li>
			</ul>
			<ul id="menu-news" class="submenu1">
				<li><a href="#news" title="dp-news-breaking,dp-dontmiss,dp-news-topstories">All News <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
				<li><a href="#denver" title="dp-news-local,dp-news-local-denver-metro,dp-news-local-denver">Denver &amp; the West <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
				<li><a href="#national" title="dp-news-national-breaking_news,dp-news-national-breaking_news,dp-news-national">National <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
				<li><a href="#business" title="dp-business,dp-business-blogs-realdeal,dp-business">Business <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
			</ul>
			<ul id="menu-sports" class="submenu1">
				<li><a href="#sports" title="dp-sports,dp-sports-broncos,dp-sports">All Sports <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
				<li><a href="#avalanche" title="dp-sports-avalanche,dp-blogs-avalanche,dp-sports-avalanche">Avalanche <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
				<li><a href="#broncos" title="dp-sports-broncos,dp-blogs-broncos,dp-sports-broncos">Broncos <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
				<li><a href="#nuggets" title="dp-sports-nuggets,dp-sports-nuggets-blog,dp-sports-nuggets">Nuggets <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
				<li><a href="#rockies" title="dp-sports-rockies,dp-blogs-rockies,dp-sports-rockies">Rockies <span class="favorite glyphicon glyphicon-star-empty pull-right"></a></li>
			</ul>
		</div>
	</div>
</nav>