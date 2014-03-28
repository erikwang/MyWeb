<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - Thank you for your contribution</title>

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


<?php
        // put your code here
		//3 favorite movie catelogies
		$favocate1 = $_POST["favocate1"];
		$favocate2 = $_POST["favocate2"];
		$favocate3 = $_POST["favocate3"];
		
		//The first mandatory movie input		
		$mname1 = $_POST["tf_mname1"];
	    $myear1 = $_POST["tf_myear1"];
		$mcate1 = $_POST["mcategories1"];
		$mdirector1 = $_POST["tf_mdir1"];
		$mactor1 = $_POST["tf_mactor1"];
		$mrating1 = $_POST["tf_mrating1"];

		// PHP uses isset to check a single checkbox was checked.
		if (isset($_POST['checkbox2'])){
			$mname2 = $_POST["tf_mname2"];
		    $myear2 = $_POST["tf_myear2"];
			$mcate2 = $_POST["mcategories2"];
			$mdirector2 = $_POST["tf_mdir2"];
			$mactor2 = $_POST["tf_mactor2"];
			$mrating2 = $_POST["tf_mrating2"];
		}
		
		if (isset($_POST['checkbox3'])){
			$mname3 = $_POST["tf_mname3"];
		    $myear3 = $_POST["tf_myear3"];
			$mcate3 = $_POST["mcategories3"];
			$mdirector3 = $_POST["tf_mdir3"];
			$mactor3 = $_POST["tf_mactor3"];
			$mrating3 = $_POST["tf_mrating3"];
		}

		if (isset($_POST['checkbox4'])){
			$mname4 = $_POST["tf_mname4"];
		    $myear4 = $_POST["tf_myear4"];
			$mcate4 = $_POST["mcategories4"];
			$mdirector4 = $_POST["tf_mdir4"];
			$mactor4 = $_POST["tf_mactor4"];
			$mrating4 = $_POST["tf_mrating4"];
		}

		if (isset($_POST['checkbox5'])){
			$mname5 = $_POST["tf_mname5"];
		    $myear5 = $_POST["tf_myear5"];
			$mcate5 = $_POST["mcategories5"];
			$mdirector5 = $_POST["tf_mdir5"];
			$mactor5 = $_POST["tf_mactor5"];
			$mrating5 = $_POST["tf_mrating5"];
		}

		
		/*$m2flag = $_POST["checkbox2"];
		$m3flag = $_POST["checkbox3"];
		$m4flag = $_POST["checkbox4"];
		$m5flag = $_POST["checkbox5"];

		if($m2flag != null){
		
		}
		*/		
		function showTable($mname,$mcate,$myear,$mdirector,$mactor,$mrating){
			print("
			<table width='200' border='0' cellspacing='0' cellpadding='0' class='table-bordered'>
			<tr><td>Movie name</td><td>$mname</td></tr>
			<tr><td>Movie category</td><td>$mcate</td></tr>
			<tr><td>Movie year</td><td>$myear</td></tr>
			<tr><td>Movie director</td><td>$mdirector</td></tr>
			<tr><td>Movie actors</td><td>$mactor</td></tr>
			<tr><td>Movie rating</td><td>$mrating</td></tr></table>		
			");
		}
		
		
?>
</head>

<body onload="initText()">
<?php include 'titlediv.php';?>
<div class="Layer0" id="bodylayer">
<?php 
print("<font size= 16px> Your top 3 favorite movie categories:<br></font>");
print("<font size= 16px;color= color='#FFFF00'> $favocate1, $favocate2, $favocate3</font>");

print("<hr> <br><h>Movie information</h>");

showTable($mname1,$mcate1,$myear1,$mdirector1,$mactor1,$mrating1);

if(isset($_POST['checkbox2'])){
	print("<hr/>");
	showTable($mname2,$mcate2,$myear2,$mdirector2,$mactor2,$mrating2);
}

if(isset($_POST['checkbox3'])){
	print("<hr/>");
	showTable($mname3,$mcate3,$myear3,$mdirector3,$mactor3,$mrating3);
}

if(isset($_POST['checkbox4'])){
	print("<hr/>");
	showTable($mname4,$mcate4,$myear4,$mdirector4,$mactor4,$mrating4);	
}

if(isset($_POST['checkbox5'])){
	print("<hr/>");
	showTable($mname5,$mcate5,$myear5,$mdirector5,$mactor5,$mrating5);	
}


print("<br><br>Thanks once again for your contribution to MacMovie database.")
?>
<p></p>
<p>
<a href="registeration.html">Entry more favorite movies to MacMovie database</a> | <a href="movie.html">Back to MacMovie home</a>
</p>

</div>

</body>
</html>