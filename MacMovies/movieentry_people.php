<?php
	require_once('dbconn.php');
	mysql_select_db($database_cnn1, $cnn1);
	$msn = $_GET["msn"];
	
	if(isset($_POST['mpeople'])){
		$people = $_POST["mpeople"];		
	}
	if(isset($_POST['mrole'])){
		$role = $_POST["mrole"];
	}
	
	if(isset($_POST['mpeople']) && isset($_POST['mrole'])){
		$sql1 = "insert into tb_roles(rolename,tb_movies_msn)values('$role','$msn')";
		$result1 = mysql_query($sql1, $cnn1) or die(mysql_error());
		if (!$result1) {
			echo("There is an error during insert new roles into database:".mysql_error());
			mysql_free_result($result1);
			exit();
		}else{
			$sql2 = "select max(rosn) rosn from tb_roles";
			$result2 = mysql_query($sql2, $cnn1) or die(mysql_error());
			if (!$result2) {
				echo("There is an error during select max rosn from database:".mysql_error());
				mysql_free_result($result2);
				exit();
			}else{
				$row_result2 = mysql_fetch_assoc($result2);
				$rosn = $row_result2['rosn'];
			}	
		}
		
		$sql3 = "insert into tb_roles_has_tb_people(tb_roles_rosn,tb_people_psn) values('$rosn','$people')";
		$result3 = mysql_query($sql3, $cnn1) or die(mysql_error());
		if (!$result3) {
			echo("There is an error during insert the mapping of people and movie role into database:".mysql_error());
			mysql_free_result($result3);
			exit();
		}
	}else{
		print("Not catch following parameters");
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - Enter a new movie record - Step 2</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

function goList(){
	window.location.href = "movielist.php";
}

function goReview(){
	window.location.href = "movieentry_review.php?msn=<?php echo $msn;?>";
}
</script>
</head>

<body>
<?php include 'titlediv.php';?>

<form action="movieentry_people.php?msn=<?php echo $msn?>" method="post">
<div class="Layer0" id="bodylayer">
  <p>New movie entry - Step 2: Add people to the movie
  </p>
  <p>Mapping people to movie</p>
 
  <?php 
  		$sql4 = "select psn,firstname,lastname from tb_people";
		$result4 = mysql_query($sql4, $cnn1) or die(mysql_error());
		if (!$result4) {
			echo("There is an error during select people from database:".mysql_error());
			mysql_free_result($result4);
			exit();
		}else{
			$row_result4 = mysql_fetch_assoc($result4);
		}?>
        <p>
	        <select name="mpeople" class="list-group" id="mpeople">
			<?php do {?>
	    	  <option  value="<?php echo $row_result4['psn']?>" class="li"><?php echo $row_result4['firstname']; echo $row_result4['lastname'] ?>
		      </option>
		    <?php }
			   while ($row_result4 = mysql_fetch_assoc($result4));?>
    		</select>
		is
		<select name="mrole" id="mrole">
		  <option value="Producer">Producer</option>
		  <option value="Director">Director</option>
		  <option value="Story writer">Story writer</option>
		  <option value="Actor">Actor</option>
		  <option value="Composer">Composer</option>
		  <option value="Artist">Artist</option>
		  <option value="Camera">Camera</option>
		</select>
		</p>
    <p>
          <input name="button" type="submit" class="btn-primary" id="button" value="Add" />
          <input name="button3" type="button" class="btn-warning" id="button3" value="Add review to the movie" onclick="goReview()" />
          <input name="button2" type="button" class="btn-success" id="button2" value="Complete" onclick="goList()"/>
      </p>
	<iframe height="600px" width="100%" frameborder="0" src="showmovie_embed.php?msn=<?php echo $msn;?>"></iframe>
</div>
</form>

</body>
</html>
<?php mysql_free_result($result1);?>
<?php mysql_free_result($result2);?>
<?php mysql_free_result($result3);?>
<?php mysql_free_result($result4);?>