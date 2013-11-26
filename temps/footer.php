	<div class="banner-bottom">
		<a href="#"><img src="img/banner-bottom-mobile.jpg" alt=""/></a>
	</div>
	<footer id="site-footer">
		<section class="colophon">
			<p>Copyright notice and other stuff</p>
		</section>
	</footer><!-- #site-footer -->
	
	<!-- JAVASCRIPTS -->
	
	<!-- JQUERY -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/base/jquery-2.0.0.min.js"></script>

	<!-- ADD FUNCTIONALITY FOR PSEUDO SELECTORS IN IE 6-8 -->
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="<?php echo BASE_URL . DS . JS_DIR; ?>/ie/selectivizr.js"></script>
	<![endif]-->
	
	<!-- TEMPLATING -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/base/handlebars.min.js"></script>

	<!-- POPULATE VARS FROM SERVER SIDE -->
	<script type="text/javascript">
		$(document).data('cookiename', '<?php echo COOKIE_NAME; ?>');
		$(document).data('baseurl', '<?php echo BASE_URL; ?>');
		$(document).data('currenturl', '<?php echo $this_url; ?>');
	</script>
	
    <!--share toggles-->
    <script type="text/javascript">
	    $shareToggles = $('.container').find($('.share-toggle')),
        $headerShareToggle = $('#article-head').find($('.share-toggle')),
    
    $.each($shareToggles, function() {
      $(this).on('click', function(e){
        e.preventDefault();
        console.log('hello');
        $(this).parent().parent().toggleClass('active');
      });
    });
    $headerShareToggle.on('click', function(e){
          $('#article-head').toggleClass('share-active').removeClass('search-active');
    });
    $headerSearchToggle.on('click', function(e){
      $('#article-head').toggleClass('search-active').removeClass('share-active');
      setTimeout(function(){
      ($('#article-head').hasClass('search-active')) ? $('#search-field').focus() :  $('#search-field').blur();
    }, 250);
    });
	</script>
	

	<!-- PLUGINS -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/jquery.smartresize.min.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/jquery.cookie.min.js"></script>
	
	<!-- CUSTOM SCRIPTS -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/cookie.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/script.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/hammer.js-1.0.5/dist/hammer.js"></script>
</body>
</html>
<style type="text/css">.container { max-width: 1000px; margin: 0 auto; }</style>