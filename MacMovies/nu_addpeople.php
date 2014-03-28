<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - people entry</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<script src="js/VaildateInformation.js" type="text/javascript"></script>
</head>

<body>
<div id="headlayer" class="Layertitle">
	<p><a href="movie.html">MacMovie home</a> | <a href="registeration.html">User Registration </a>| <a href="movieentry.php">Enter Movies</a> | 
<?php 
// if privilege is 1, then this is admin, show add new movie link
if(isset($_SESSION['pri']) && $_SESSION['pri'] == 1){
		print("<a href='addnewmovie.php'> Admin enter new movie</a>");
}else{
		$_SESSION['pri'] = 9; // for guest
}
?></p>
	<p><span id="movieText" class="movingtext" onmouseover="stopMoving()" onmouseout="resumeMoving()" >Enter favorite movies</span></p>
</div>
<div class="Layer0" id="bodylayer">
  <p>Add a new entry for a people</p>
  <p>First Name 
    <label for="tf_firstname"></label>
    <input type="text" name="tf_firstname" id="tf_firstname" />
  </p>
  <p>Last Name 
    <input type="text" name="tf_lastname" id="tf_lastname" />
  </p>
  <p>DOB 
    <input type="text" name="tf_dob" id="tf_dob" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</div>
</body>
</html>