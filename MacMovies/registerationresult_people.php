<?php require_once('dbconn.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
        // put your code here
		$firstname = $_POST["tf_firstname"];
	    $lastname = $_POST["tf_lastname"];
		$dob = $_POST["tf_dob"];
		mysql_select_db($database_cnn1, $cnn1);
		$sql1 = "insert into tb_people(firstname,lastname,dob)values('$firstname','$lastname','$dob')";
		$result1=mysql_query($sql1);
		if (!$result1) {
					echo("There is an error during insert new people information into database:".mysql_error());
					mysql_free_result($result1);
					exit();
		}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Confirmation</title>
<link href="../6ww/css/bootstrap.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body { font-size:14px;}
input:hover {color:#00F}
input:focus {background-color:#900;color:#FFF}
</style>

<script type="text/javascript" src="js/MovingImage.js"></script>
<script type="text/javascript" src="js/MovingToTop.js"></script>
<script src="js/VaildateInformation.js" type="text/javascript"></script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="headlayer" class="Layertitle">
	<p><a href="movie.html">MacMovie home</a> | <a href="registeration.html">User Registration </a>| <a href="movieentry.html">Enter Movies</a></p>
	<p><span id="movieText" class="movingtext" onmouseover="stopMoving()" onmouseout="resumeMoving()" >Registeration completed!</span></p>
</div>
<div class="Layer0" id="bodylayer">
<p class="movienumber">Thank you for your entry</p>
<p>Please review thefollowing information you have entered:</p>
<p>First Name:&nbsp;<?php print($firstname);?></p>
<p>Last Name:&nbsp;<?php print($lastname);?></p>
<p>Date of Birth:&nbsp;<?php print($dob);?></p>
<hr/>
<a href="movie.html">Return to MacMovie Home</a>
</div>
</body>
</html>
