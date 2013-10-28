<?php
$_prop = (isset($_REQUEST['p'])) ? $_REQUEST['p']) : 'denverpost.com';
$_storyid = (isset($_REQUEST['x'])) ? $_REQUEST['x'] : '22889442';
$_url = 'http://www.'. $_prop .'/mngi/servletDispatch/JsonArticleServlet.dyn?ci='. $_storyid .'&includeBody=true';
$_file = file_get_contents( $_url );
echo $_file;
?>