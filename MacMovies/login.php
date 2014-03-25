<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - Administrator login</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="headlayer" class="Layertitle">
	<p><a href="movie.html">MacMovie home</a> | <a href="registeration.html">User Registration </a>| <a href="movieentry.html">Enter Movies</a></p>
	<p><span id="movieText" class="movingtext" onmouseover="stopMoving()" onmouseout="resumeMoving()" >Enter favorite movies</span></p>
</div>
<div class="Layer0" id="bodylayer">
<p>Mac movie login</p>
<form action="loginresult.php"> 
<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>User Name</td>
    <td><input type="text" name="tf_account" id="tf_account" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="tf_pswd" id="tf_pswd" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</div>
</body>
</html>