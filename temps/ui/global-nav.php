<!-- WOULD LIKE THIS INTEGRATED I THINK -->
<form class="mobile-search">
	<input type="text">
</form>
<nav class="global-navigation">
	<?php if($mobile): ?>
		<div id="section-head" class="category"><h4>News</h4></div>
	<?php else: ?>
		<?php include('temps/ui/svg/dplogo.php'); ?>
	<?php endif; ?>
	<a class="navbar-toggle" id="sidebarButton" href="#siteMenu">
		<?php include('temps/ui/svg/menuicon.php'); ?>
	</a>
	<ul class="site-tools"> <!-- NEED A UL HERE? -->
		<li>
			<form class="inline-search">
				<input type="text" />
			</form>
			<a class="search-toggle" href="">
				<i class="glyphicon glyphicon-search"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- <li>
	IN MENU ALWAYS?????
	<a class="settings-toggle" href="">
		<i class="glyphicon glyphicon-cog"></i>
	</a>
</li> -->
