<?php
	session_start();
	$_SESSION['fullurl']='https://testsgenie.com';
	$_SESSION['uid']='';
	$cookie_name = "tguid";
	$cookie_value = 0;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 365), $_SESSION['fullurl']);
	$_SESSION['clearCookie']=1;
	echo '<script>window.location.href="'.$_SESSION['fullurl'].'/index.php";</script>';
?>