<?php require_once('dbconn.php'); 
	session_start();
?>

<?php
	mysql_select_db($database_cnn1, $cnn1);
	$query_Recordset1 = "SELECT * from tb_movies";
	$rs1 = mysql_query($query_Recordset1, $cnn1) or die(mysql_error());
	$row_Recordset1 = mysql_fetch_assoc($rs1);
	$totalRows_Recordset1 = mysql_num_rows($rs1);
	$row_Recordset1 = mysql_fetch_assoc($rs1);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac movie - all movie list</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000000;
}
</style>

</head>

<body>
<?php include 'titlediv.php';?>
<div class="Layer0" id="bodylayer">
<table width="80%" border="1" cellpadding="1" cellspacing="1">
  <tr class="btn-primary">
    <td width="25%">Movie Name</td>
    <td>Year</td>
    <td>Comments</td>
  </tr>
 <?php do { ?>
  <?php if ($totalRows_Recordset1 > 0){?>

  <tr class="table-striped">
    <td width="25%" height="23" bgcolor="#FFFFFF"><a href="showmovie.php?msn=<?php echo $row_Recordset1['msn']?>"><?php echo $row_Recordset1['title'];?></a></td>
    <td bgcolor="#FFFFFF"><?php echo $row_Recordset1['year'];?></td>
    <td bgcolor="#FFFFFF"><?php echo $row_Recordset1['introduction'];?></td>
  </tr>
<?php }} while ($row_Recordset1 = mysql_fetch_assoc($rs1));?>
</table>
</div>
<p>&nbsp;</p>
</body>
</html>
<?php mysql_free_result($rs1);?>
