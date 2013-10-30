<?php 
	$cookie = false;
	if(isset($_COOKIE[COOKIE_NAME])) { $cookie = json_decode(stripslashes($_COOKIE[COOKIE_NAME])); }
	//var_dump($cookie);
?>