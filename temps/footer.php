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

	<!-- PLUGINS -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/jquery.smartresize.min.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/jquery.cookie.min.js"></script>
	
	<!-- CUSTOM SCRIPTS -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/cookie.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/script.js"></script>
</body>
</html>
<style type="text/css">.container { max-width: 1000px; margin: 0 auto; }</style>