<!DOCTYPE HTML>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">


	<!-- PAGE INFO -->
	<title><?php echo THE_TITLE; ?></title>
	<link rel="author" href="<?php echo BASE_URL; ?>/humans.txt" />
	<meta name="dcterms.rightsHolder" content="Property name here" />
	<meta name="dcterms.dateCopyrighted" content="<?php echo date('Y'); ?>" />
	<meta name="description" content="" />
	<link rel="canonical" href="<?php echo BASE_URL; ?>" />
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- MODERNIZER -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/base/modernizr-2.6.2.js"></script>
	
	<!-- STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/style.css" media="screen"/>
</head>

<body>
	<!-- CHROME FRAME -->
	<!--[if lt IE 8]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header id="site-header">
		<?php include('temps/ui/global-nav.php');?>
	</header><!-- #site-header -->