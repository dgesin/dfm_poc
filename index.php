<?php require_once('inc/init.php'); // load in base objects ?>
<?php $page_type = "home"; // define page ?>
<?php if(isset($_GET['mobile']) && $_GET['mobile'] === 'true') { $mobile = true; }?>
<?php ($mobile) ? require_once('temps/mobile/header.php') : require_once('temps/header.php'); ?>
<?php require_once('temps/menu.php'); ?>
<?php require_once('temps/ui/site-settings.php'); ?>
<div id="content" role="main">
<?php if($mobile): ?>
        <div id="latest" class="scroller">
        </div><!-- #latest.scroller -->
<?php else: ?>
			<div id="article-page">
				<div id="article-head">
					<div class="close-button">
					<a href="" class="close-button"><img src="img/back-btn.png" alt=""></a>
					</div>
					<div id="share-global" class="share-zipper hidden-touch">
					  	<div class="drawer">
				            <ul class="share-tools">
				                    <a class="fc-webicon facebook large" href=""><span class="sr-only">Facebook</span></a></li>
				                    <a class="fc-webicon twitter large" href=""><span class="sr-only">Twitter</span></a></li>
				                    <a class="fc-webicon googleplus large" href=""><span class="sr-only">Google Plus</span></a></li>
				            </ul> <!-- .share-tools -->
				    	</div> <!-- .drawer -->
				    	<button class="share-toggle"><span class="glyphicon glyphicon-share-alt"><span class="sr-only">Share</span></span></button>
					</div> <!-- #share-global -->
				</div>
                <div class="container"></div>
			</div>
        <div class="content-panel">
                <?php include('temps/ui/mobile-tabs.php'); ?>
                <div class="tab-content">
                        <div id="section-head"></div>
                        <section id="latest" class="zone-one tab-pane active">
                                <h6 class="page-header">Latest news <span class="pull-right"><a href="#" class="refresh hide-for-mobile"><i class="glyphicon glyphicon-refresh"></i></a></span></h6>
                                <div class="feed"></div>
                        </section> <!-- #latest -->
                        <section id="popular" class="zone-two tab-pane">
                                <h6 class="page-header">Don't miss <span class="pull-right"><a href="#" class="refresh hide-for-mobile"><i class="glyphicon glyphicon-refresh"></i></a></span></h6>
                                <div class="feed"></div>
                        </section> <!-- #popular -->
                        <section id="picks" class="zone-three tab-pane">
                                <h6 class="page-header">Top stories <span class="pull-right"><a href="#" class="refresh hide-for-mobile"><i class="glyphicon glyphicon-refresh"></i></a></span></h6>
                                <div class="feed"></div>
                        </section> <!-- #picks -->
                </div> <!-- .tab-content -->
        </div> <!-- .content-panel -->
<?php endif; ?>
</div> <!-- #content -->

<?php ($mobile) ? require_once('temps/handlebars/mobile.php') : require_once('temps/handlebars/desktop.php'); ?>
<?php ($mobile) ? require_once('temps/mobile/footer.php') : require_once('temps/footer.php'); ?>




<style>


</style>