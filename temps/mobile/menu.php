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
	</header>
	<ul id="sideMainNav" class="nav">
		<li class="active"><a href="#news" title="dp-news-breaking,dp-dontmiss,dp-news-topstories">News <span class="glyphicon glyphicon-chevron-right"></a></li>
		<li><a href="#sports" title="dp-sports,dp-sports-broncos,dp-sports">Sports <span class="glyphicon glyphicon-chevron-right"></a></li>
		<li><a href="#life" title="dp-entertainment,dp-lifestyles-fitness,dp-entertainment">Life <span class="glyphicon glyphicon-chevron-right"></a></li>
		<li><a href="#opinion" title="dp-opinion,dp-opinion-editorials,dp-opinion-perspective">Opinion <span class="glyphicon glyphicon-chevron-right"></a></li>
	</ul>
</nav>