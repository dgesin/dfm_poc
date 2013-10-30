<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<!-- ICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#222222">

	<!-- iOS apps -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="DFM POC">

    <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
    <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
   
	<!-- PAGE INFO -->
	<title><?php echo THE_TITLE; ?></title>
	<meta name="description" content="" />
	<meta name="dcterms.rightsHolder" content="Property name here" />
	<meta name="dcterms.dateCopyrighted" content="<?php echo date('Y'); ?>" />
	<link rel="author" href="<?php echo BASE_URL; ?>/humans.txt" />
	<link rel="canonical" href="<?php echo BASE_URL; ?>" />
	
	<!-- MODERNIZER -->
	<script src="<?php echo BASE_URL . DS . JS_DIR; ?>/base/modernizr-2.6.2.js"></script>
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/style.css" media="screen"/>
</head>

<body class="mobile">
	<header id="site-header">
		<?php include('temps/ui/global-nav.php');?>
	</header><!-- #site-header -->