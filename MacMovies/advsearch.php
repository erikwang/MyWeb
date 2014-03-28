<?php
	session_start();
	$flag_people_s = 0;
	$flag_people_c = 0;
	$flag_review_s = 0;
	$flag_review_c = 0;
	$flag_genre_s = 0;
	$flag_genre_c = 0;
	$attr1 = 'anything';
	$value1 = 'anything';


	
	require_once('dbconn.php');
	include 'util.php';
	
	mysql_select_db($database_cnn1, $cnn1);
	

	if(isset($_POST['se_attr1'])){
		$attr1 = $_POST["se_attr1"];		
	}
	if(isset($_POST['tf_value1'])){
		$value1 = addslashes($_POST["tf_value1"]);		
	}
	if(isset($_POST['se_attr2'])){
		$attr2 = $_POST["se_attr2"];		
	}
	if(isset($_POST['tf_value2'])){
		$value2 = addslashes($_POST["tf_value2"]);		
	}

	if(isset($_POST['se_attr3'])){
		$attr3 = $_POST["se_attr3"];		
	}
	if(isset($_POST['tf_value3'])){
		$value3 = addslashes($_POST["tf_value3"]);		
	}
	
	if(isset($_POST['se_attr1']) && isset($_POST['tf_value1'])){
	/*$sql1 = "
		select distinct(g.msn), g.title
		from 
			(select tb_roles_rosn rosn,tb_people_psn psn from tb_roles_has_tb_people) b,
			(select tb_movies_msn msn, rosn, rolename from tb_roles where rolename ='Actor') c,
			(select tb_movies_msn msn,score, mdesc from tb_review) d,	
			(select psn, firstname, lastname from tb_people) e,
			(select tb_movies_msn msn, tb_genre_gsn gsn from tb_movies_has_tb_genre) f,	
			(select msn, title, introduction from tb_movies)	g 
		where
		e.psn = b.psn
		and b.rosn = c.rosn
		and g.msn = c.msn
		and g.msn = d.msn
		and g.msn = f.msn
	";*/
	
	
	$sql1 = "select distinct(g.msn), g.title from (select msn, title, introduction from tb_movies) g";
	$sql_source = "";
	$sql_condition = " where true ";
	updateSource($attr1,$value1);
	updateCondition($attr1,$value1);

		if(isset($_POST['se_attr2']) && isset($_POST['tf_value2'])){
				updateSource($attr2,$value2);
				updateCondition($attr2,$value2);
		}

		if(isset($_POST['se_attr3']) && isset($_POST['tf_value3'])){
				updateSource($attr3,$value3);
				updateCondition($attr3,$value3);
		}
		if(isset($_POST['se_attr4']) && isset($_POST['tf_value4'])){
				updateSource($attr4,$value4);
				updateCondition($attr4,$value4);
		}
		if(isset($_POST['se_attr5']) && isset($_POST['tf_value5'])){
				updateSource($attr5,$value5);
				updateCondition($attr5,$value5);
		}

		$sql1 = $sql1.$sql_source.$sql_condition;
		print($sql1);
		$rs1 = mysql_query($sql1, $cnn1) or die(mysql_error());
		if (!$rs1) {
			echo("There is an error during advanced search a movie record dur to your criteria from the database:".mysql_error());
			mysql_free_result($rs1);
			exit();
		}else{
			$row_rs1 = mysql_fetch_assoc($rs1);
		}
	}
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - advanced search</title>
<script type="text/javascript" src="js/GetSelection.js"></script>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'titlediv.php';?>
<form action="advsearch.php" method="post">
<div class="Layer0" id="bodylayer">
  <p>Search for following criterias</p>
  <p>You can use up to 5 &quot;AND&quot; relation of criterias to find a movie. <br />
    Review score, gener id are exactly match others are approximate match,  not case sensitive.</p>

Search criteria <span class="movienumber">#1</span>:
<table width="639" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47%">Attribute
      <select name="se_attr1" id="se_attr1">
        <option value="moviename">Movie name</option>
        <option value="firstname">First name</option>
        <option value="lastname">Last name</option>
        <option value="genre">Movie genre</option>
        <option value="year">Movie year</option>
        <option value="keyind">Key words in description</option>
        <option value="keyinr">Key words in review</option>
        <option value="score">Review score</option>
      </select> 
     :=
     </td>
      <td width="53%">
        <input type="text" name="tf_value1" id="tf_value1" /></td>
    </tr>
</table>

 <hr/>
  
<input type="checkbox" name="checkbox2" id="checkbox2" onclick="enableinput_search(2)"/>
Search criteria <span class="movienumber">#2</span>:
<table width="639" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47%">Attribute
     <select name="se_attr2" id="se_attr2" disabled="disabled">
        <option value="firstname">First name</option>
        <option value="lastname">Last name</option>
        <option value="moviename">Movie name</option>
        <option value="genre">Movie genre</option>
        <option value="year">Movie year</option>
        <option value="keyind">Key words in description</option>
        <option value="keyinr">Key words in review</option>
        <option value="score">Review score</option>
      </select> 
     :=
      </td>
      <td width="53%">
        <input type="text" name="tf_value2" id="tf_value2" disabled="disabled"/></td>
    </tr>
</table>

  <hr/>

<input type="checkbox" name="checkbox3" id="checkbox3" onclick="enableinput_search(3)"/>
Search criteria <span class="movienumber">#3</span>:
<table width="639" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47%">Attribute
      <select name="se_attr3" id="se_attr3" disabled="disabled">
        <option value="lastname">Last name</option>
        <option value="firstname">First name</option>
        <option value="moviename">Movie name</option>
        <option value="genre">Movie genre</option>
        <option value="year">Movie year</option>
        <option value="keyind">Key words in description</option>
        <option value="keyinr">Key words in review</option>
        <option value="score">Review score</option>
      </select>  
      :=
      </td>
      <td width="53%">
        <input type="text" name="tf_value3" id="tf_value3" disabled="disabled"/></td>
    </tr>
</table>
  <hr/>
 
<input type="checkbox" name="checkbox4" id="checkbox4" onclick="enableinput_search(4)"/>
Search criteria <span class="movienumber">#4</span>:
<table width="639" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47%">Attribute
      <select name="se_attr4" id="se_attr4" disabled="disabled">
        <option value="keyind">Key words in description</option>
        <option value="firstname">First name</option>
        <option value="lastname">Last name</option>
        <option value="moviename">Movie name</option>
        <option value="genre">Movie genre</option>
        <option value="year">Movie year</option>
        <option value="keyinr">Key words in review</option>
        <option value="score">Review score</option>
      </select>  
      :=
      </td>
      <td width="53%">
        <input type="text" name="tf_value4" id="tf_value4" disabled="disabled"/></td>
    </tr>
</table>
  <hr/>
  
  <input type="checkbox" name="checkbox5" id="checkbox5" onclick="enableinput_search(5)"/>
Search criteria <span class="movienumber">#5</span>:
<table width="639" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="47%">Attribute
      <select name="se_attr5" id="se_attr5" disabled="disabled">
        <option value="keyinr">Key words in review</option>
        <option value="firstname">First name</option>
        <option value="lastname">Last name</option>
        <option value="moviename">Movie name</option>
        <option value="genre">Movie genre</option>
        <option value="year">Movie year</option>
        <option value="keyind">Key words in description</option>
        <option value="score">Review score</option>
      </select>  
      :=
      </td>
      <td width="53%">
        <input type="text" name="tf_value5" id="tf_value5" disabled="disabled"/></td>
    </tr>
</table>
  <hr/>
 
 
  <p>
    <input name="button" type="submit" class="btn-primary" id="button" value="Search" />
  </p>



  <p>
  <?php 
  print("Search result by:<br>");
	print(" - $attr1 ：= $value1");
	print("<br>");
	if(isset($_POST['se_attr2']) && isset($_POST['tf_value2'])){
		print(" - $attr2 ：=  $value2");
		print("<br>");
	}
	
	if(isset($_POST['se_attr3']) && isset($_POST['tf_value3'])){
		print(" - $attr3 ：= $value3");
		print("<br>");
	}
	if(isset($_POST['se_attr4']) && isset($_POST['tf_value4'])){
		print(" - $attr4 ：= $value4");
		print("<br>");
	}
	if(isset($_POST['se_attr5']) && isset($_POST['tf_value5'])){
		print(" - $attr5 ：= $value5");
	}
	print("<br>");

  if(isset($_POST['se_attr1']) && isset($_POST['tf_value1']) && mysql_num_rows($rs1) > 0){  
	do{
		$title = $row_rs1['title'];
		$msn = $row_rs1['msn'];
		print ("<a href='showmovie.php?msn=$msn'>$title</a>");
		echo "<br>";
	} while ($row_rs1 = mysql_fetch_assoc($rs1));
	mysql_free_result($rs1);
}else{
	print("Sorry, no match result");
}
  ?>
  </p>
</div>
</form>
</body>
</html>