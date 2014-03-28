<?php
	session_start();
	require_once('dbconn.php');
	include 'util.php';
	
	$firstname='';
	$lastname='';
	$genre='';
	$score='';
	
	$flag_people_s = 0;
	$flag_people_c = 0;
	$flag_review_s = 0;
	$flag_review_c = 0;
	$flag_genre_s = 0;
	$flag_genre_c = 0;
	
	mysql_select_db($database_cnn1, $cnn1);

	if(isset($_POST['tf_firstname'])){
		$firstname = addslashes($_POST["tf_firstname"]);		
	}

	if(isset($_POST['tf_lastname'])){
		$lastname = addslashes($_POST["tf_lastname"]);		
	}

	if(isset($_POST['se_score'])){
		$score = $_POST["se_score"];
	}

	if(isset($_POST['se_genre'])){
		$genre = $_POST["se_genre"];
	}

	$sql1 = "select distinct(g.msn), g.title from (select msn, title, introduction from tb_movies) g";
	$sql_source = "";
	$sql_condition = " where true ";

		if(isset($_POST['tf_firstname']) && $firstname !=''){
				updateSource('firstname',$firstname);
				updateCondition('firstname',$firstname);
		}

		if(isset($_POST['tf_lastname']) && $lastname !=''){
				updateSource('lastname',$lastname);
				updateCondition('lastname',$lastname);
		}
		
		if(isset($_POST['se_genre']) && $genre != '%'){
				updateSource('genre',$genre);
				updateCondition('genre',$genre);
		}

		
		if(isset($_POST['se_score']) && $score != '%'){
				updateSource('score',$score);
				updateCondition('score',$score);
		}

		$sql1 = $sql1.$sql_source.$sql_condition;
		$rs1 = mysql_query($sql1, $cnn1) or die(mysql_error());
		if (!$rs1) {
			echo("There is an error during advanced search a movie record dur to your criteria from the database:".mysql_error());
			mysql_free_result($rs1);
			exit();
		}else{
			$row_rs1 = mysql_fetch_assoc($rs1);
		}

?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - Search a movie</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'titlediv.php';?>
<form action="search.php" method="post">
<div class="Layer0" id="bodylayer">
  <p>Search for following criterias, or try <a href="advsearch.php">advanced search</a></p>
  <p>Actor firstname&nbsp;
<input name="tf_firstname" type="text" class="input-sm" id="tf_firstname" />
  <br />
  </p>
  <p>Actor lastname &nbsp;
<input name="tf_lastname" type="text" class="input-sm" id="tf_lastname" />
  </p>
  <br />
  <p>Genre
    <select name="se_genre" class="list-group" id="mcategories">
      <option value="%">Any</option>
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
  <p>Review score
      <select name="se_score" id="se_score">
        <option value="%">Any</option>
      <option value="5">5</option>
      <option value="4">4</option>
      <option value="3">3</option>
      <option value="2">2</option>
      <option value="1">1</option>
</select>
      (The movie will not show until has a review with score)
  </p>
  <p>
    <input name="button" type="submit" class="btn-primary" id="button" value="Search" />
  </p>
  <p>
<?php
if(isset($_POST['tf_lastname']) || isset($_POST['tf_firstname']) || isset($_POST['se_genre']) || isset($_POST['se_score'])){
	print("Search result by:<br>");
	print("Firstname = $firstname , ");
	print("Lastname = $lastname , ");
	print("Genre code= $genre , ");
	print("Review score = $score <br>");
	
if(mysql_num_rows($rs1) > 0){  
	do{
		$title = $row_rs1['title'];
		$msn = $row_rs1['msn'];
		print ("<a href='showmovie.php?msn=$msn'>$title</a>");
		echo "<br>";
	} while ($row_rs1 = mysql_fetch_assoc($rs1));
}else{
	print("Sorry, no match result");
}
mysql_free_result($rs1);
}
?>
</p>
</div>
</form>
</body>
</html>
