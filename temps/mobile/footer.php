	<footer id="site-footer">
		<section class="colophon">
			<p>Copyright notice and other stuff</p>
		</section>
	</footer><!-- #site-footer -->
	
	<!-- JAVASCRIPTS -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/base/zepto.min.js"></script>
	<!-- POPULATE VARS FROM SERVER SIDE -->
	<script type="text/javascript">
		$('body').data('cookiename', '<?php echo COOKIE_NAME; ?>');
		$('body').data('baseurl', '<?php echo BASE_URL; ?>');
		$('body').data('currenturl', '<?php echo $this_url; ?>');
	</script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/base/handlebars.min.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/iscroll.min.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/plugins/jquery.cookie.min.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/cookie.js"></script>
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/script-phone.js"></script>

</body>
</html>