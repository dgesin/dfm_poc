<?php
<<<<<<< HEAD
$_prop = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : 'denverpost.com';
=======
$_prop = (isset($_REQUEST['p'])) ? $_REQUEST['p']) : 'denverpost.com';
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
$_storyid = (isset($_REQUEST['x'])) ? $_REQUEST['x'] : '22889442';
$_url = 'http://www.'. $_prop .'/mngi/servletDispatch/JsonArticleServlet.dyn?ci='. $_storyid .'&includeBody=true';
$_file = file_get_contents( $_url );
echo $_file;
?>