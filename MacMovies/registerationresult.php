<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
        // put your code here
		$firstname = $_POST["tf_firstname"];
	    $lastname = $_POST["tf_lastname"];
		$username = $_POST["tf_username"];
		$city = $_POST["tf_city"];
		$street = $_POST["tf_street"];
		$provience = $_POST["tf_province"];
		$phone = $_POST["tf_phone"];
		$postal = $_POST["tf_postal"];

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Regidtration Confirmation</title>
<link href="../6ww/css/bootstrap.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body { font-size:14px;}
input:hover {color:#00F}
input:focus {background-color:#900;color:#FFF}
</style>

<script type="text/javascript" src="js/MovingImage.js"></script>
<script type="text/javascript" src="js/MovingToTop.js"></script>
<script src="js/VaildateInformation.js" type="text/javascript"></script>

<link href="../6ww/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../6ww/css/mycss.css" rel="stylesheet" type="text/css" />

</head>

<body onload="initText()">
<div id="headlayer" class="Layertitle">
	<p><a href="movie.html">MacMovie home</a> | <a href="registeration.html">User Registration </a>| <a href="movieentry.html">Enter Movies</a></p>
	<p><span id="movieText" class="movingtext" onmouseover="stopMoving()" onmouseout="resumeMoving()" >Registeration completed! Thank you and have fun!</span></p>
</div>
<div class="Layer0">
<p class="movienumber">Thank you for your registeration</p>
<p>Please review thefollowing information you have entered:</p>
<p>User Name:<?php print($username);?></p>
<p>First Name:<?php print($firstname);?></p>
<p>Last Name:<?php print($lastname);?></p>
<p>Telephone Number:<?php print($phone);?> </p>
<p>Province:<?php print($provience);?></p>
<p>City:<?php print($city);?></p>
<p>Street: <?php print($street);?></p>
<p>Postal: <?php print($postal);?></p>
</div>
</body>
</html>
