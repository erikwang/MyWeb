<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - Enter a new movie record - Step 1</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
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

  <form action="process1.php" method="post">
	<div class="Layer0" id="bodylayer">
	<p>New movie entry - Step 1: Basic information</p>
	<p>Movie Title 
    <input name="tf_movietitle" type="text" id="tf_movietitle" size="80" />
	</p>
	<p>Year 
    <input name="tf_year" type="text" id="tf_year" size="8" maxlength="4" />
	</p>
	<p>Genere
	<select name="mcategories[]" size="6" multiple="multiple" class="list-group" id="mcategories">
      <option value="1" class="li">Action</option>
      <option  value="2">Animation</option>
      <option  value="3">Comedy</option>
      <option  value="4">Documentary</option>
      <option  value="5">Family</option>
      <option  value="6">Horror</option>
      <option  value="7">Musical</option>
      <option  value="8">Romance</option>
      <option  value="9">Adventure</option>
      <option  value="10">Biography</option>
      <option  value="11">Drama</option>
      <option  value="12">History</option>
      <option  value="13">Mystery</option>
      <option  value="14">Sci-fi</option>
    </select>
  </p>
  <p>Short Description  </p>
  <p>
    <textarea name="tf_desc" cols="80" rows="5" id="tf_desc"></textarea>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</div>
</form>
</body>
</html>