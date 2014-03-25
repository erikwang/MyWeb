<?php
	require_once('dbconn.php');
	mysql_select_db($database_cnn1, $cnn1);
	$msn = $_GET["msn"];

	if(isset($_POST['tf_name'])){
		$name = addslashes($_POST["tf_name"]);		
	}
	if(isset($_POST['tf_email'])){
		$email = addslashes($_POST["tf_email"]);
	}
	if(isset($_POST['tf_review'])){
		$review = addslashes($_POST["tf_review"]);
	}
	if(isset($_POST['se_score'])){
		$score = $_POST["se_score"];
	}
	if(isset($_POST['se_score']) && isset($_POST['tf_review']) && isset($_POST['tf_email']) && isset($_POST['tf_name'])){
	$sql1 = "insert into tb_review(descby, email, score, tb_movies_msn, mdesc) values('$name','$email','$score','$msn','$review')";
	print($sql1);
		$result1 = mysql_query($sql1, $cnn1) or die(mysql_error());
		if (!$result1) {
			echo("There is an error during insert the review into database:".mysql_error());
			mysql_free_result($result1);
			exit();
		}
	}

?>	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - Movie entry - Step 3 add reviews</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="movieentry_review.php?msn=<?php echo $msn;?>" method="post">
<div id="headlayer" class="Layertitle">
	<p><a href="movie.html">MacMovie home</a> | <a href="registeration.html">User Registration </a>| <a href="movieentry.html">Enter Movies (Assgn2)</a> | 
<?php 
// if privilege is 1, then this is admin, show add new movie link
if(isset($_SESSION['pri']) && $_SESSION['pri'] == 1){
		print("<a href='movieentry.php'> New movie entry</a> | ");
		print("<a href='addpeopleformovie.php'> New people entry</a>");
}else{
		$_SESSION['pri'] = 9; // for guest
}
?></p>
	<p><span id="movieText" class="movingtext" onmouseover="stopMoving()" onmouseout="resumeMoving()" >Enter favorite movies</span></p>
</div>
<div class="Layer0" id="bodylayer">
  <p>New movie entry - Step 3: Add reviews to the movie
  </p>
  <p>Mapping reviews to the movie</p>
  <p>Reviewer name: 
    <label for="tf_name"></label>
    <input type="text" name="tf_name" id="tf_name" />
  </p>
  <p>Reviewer email address: 
    <label for="tf_email"></label>
    <input type="text" name="tf_email" id="tf_email" />
  </p>

  <p>
    <label for="textarea"></label>
    <textarea name="tf_review" id="tf_review" cols="80" rows="15"></textarea>
  </p>
  <p>
    <label for="se_score"></label>
    Review score: 
    <select name="se_score" id="se_score">
      <option value="5">5</option>
      <option value="4">4</option>
      <option value="3">3</option>
      <option value="2">2</option>
      <option value="1">1</option>
</select>
  of 5</p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
  <iframe height="600px" width="100%" frameborder="0" src="showmovie_embed.php?msn=<?php echo $msn;?>"></iframe>
</div>
</form>
</body>
</html>
<?php mysql_free_result($result1);?>
