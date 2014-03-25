<title>Processing - add movie basic information</title>
<?php
		require_once('dbconn.php'); 
        // put your code here

		$mtitle = addslashes($_POST["tf_movietitle"]);
	    $myear = $_POST["tf_year"];
		$mdesc = addslashes($_POST["tf_desc"]);

		mysql_select_db($database_cnn1, $cnn1);
		$sql1 = "insert into tb_movies(title,introduction,year) values('$mtitle','$mdesc','$myear')";
		print $sql1;
		$result1 = mysql_query($sql1, $cnn1) or die(mysql_error());
		if (!$result1) {
			echo("There is an error during insert new movie information into database:".mysql_error());
			mysql_free_result($result1);
			exit();
		}
		
		$sql2 = "select max(msn) msn from tb_movies";
		$result2 = mysql_query($sql2, $cnn1) or die(mysql_error());
		if (!$result2) {
			echo("There is an error during insert new movie information into database:".mysql_error());
			mysql_free_result($result2);
			exit();
		}else{
			$row_result2 = mysql_fetch_assoc($result2);
			$msn = $row_result2['msn'];
		}

		foreach ($_POST['mcategories'] as $gene){
			$sql3 = "insert into tb_movies_has_tb_genre(tb_movies_msn,tb_genre_gsn)values('$msn','$gene')";
			print $sql3;
			$result3 = mysql_query($sql3, $cnn1) or die(mysql_error());
			if (!$result3) {
				echo("There is an error during insert genre information into database:".mysql_error());
				mysql_free_result($result3);
				exit();
			}else{
				print("$gene is added to database for movie sn:$msn");
			}
		}
		mysql_free_result($result1);
		mysql_free_result($result2);
		mysql_free_result($result3);
		$url = "movieentry_people.php?msn=$msn";
		header( "Location: $url");
		
		
?>