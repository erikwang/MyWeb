<?php require_once('dbconn.php'); ?>

<?php
session_start();
$msn = $_GET['msn'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - show a movie informaiton</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000000;
}
</style>
</head>

<body>
<div id="headlayer" class="Layertitle">
	<p><a href="movie.html">MacMovie home</a> | <a href="registeration.html">User Registration </a>| <a href="movieentry.php">Enter Movies</a> | 
<?php 
// if privilege is 1, then this is admin, show add new movie link
if($_SESSION['pri'] == 1){
	print("<a href='addnewmovie.php'> Admin enter new movie</a>");
}
?>
    
    </p>
	<p><span id="movieText" class="movingtext" onmouseover="stopMoving()" onmouseout="resumeMoving()" >Enter favorite movies</span></p>
</div>
<div class="Layer0" id="bodylayer">
<iframe height="600px" width="100%" frameborder="0" src="showmovie_embed.php?msn=<?php echo $msn;?>"></iframe>
</div>
</body>
</html>