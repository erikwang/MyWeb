
<?php
	session_start();
	$_SESSION['pri'] = '9';
	$url="movielist.php";
	header( "Location: $url");
?>