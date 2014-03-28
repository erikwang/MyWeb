<?php require_once('dbconn.php'); ?>

<?php
session_start();
mysql_select_db($database_cnn1, $cnn1);
$msn = $_GET['msn'];
$query_movie = "SELECT * from tb_movies where msn = $msn";
$rs1 = mysql_query($query_movie, $cnn1) or die(mysql_error());
$row_rs1 = mysql_fetch_assoc($rs1);


$query_actor = "select distinct(a.psn), a.firstname, a.lastname,c.rolename from 
(select * from tb_people) a, (select tb_roles_rosn,tb_people_psn from tb_roles_has_tb_people) b, (select rosn, rolename from tb_roles where tb_movies_msn = $msn) c
where a.psn = b.tb_people_psn and b.tb_roles_rosn = c.rosn order by c.rolename";

$rs2 = mysql_query($query_actor, $cnn1) or die(mysql_error());
$row_rs2 = mysql_fetch_assoc($rs2);


$query_genre = "SELECT * FROM macmovie.tb_genre where tb_genre.gsn in (select tb_genre_gsn from tb_movies_has_tb_genre where tb_movies_msn = $msn)";
$rs4 = mysql_query($query_genre, $cnn1) or die(mysql_error());
$row_rs4 = mysql_fetch_assoc($rs4);

$query_review = "SELECT * FROM macmovie.tb_review where tb_movies_msn = $msn";
$rs5 = mysql_query($query_review, $cnn1) or die(mysql_error());
$row_rs5 = mysql_fetch_assoc($rs5);


?>

<table width="50%" border="0" cellpadding="1" cellspacing="1" class="table-bordered">
  <tr>
    <td colspan="2" bgcolor="#FFFFFF"><strong>Movie informaiton</strong></td>
  </tr>
  <tr>
    <td width="158" bgcolor="#FFFFFF">Movie Name</td>
    <td width="530" bgcolor="#FFFFFF"><?php echo $row_rs1['title'];?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Year</td>
    <td bgcolor="#FFFFFF"><?php echo $row_rs1['year'];?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Genre</td>
    <td bgcolor="#FFFFFF">
    <?php
	do{
	 echo $row_rs4['genrename'];
	 echo "<br>";
 	} while ($row_rs4 = mysql_fetch_assoc($rs4));
	 ?>     
    </td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF">Actors and staff</td>
    <td bgcolor="#FFFFFF"><?php 
		do{
			echo $row_rs2['rolename'];
			echo ": ";
			echo $row_rs2['firstname'];?> <?php echo $row_rs2['lastname'];
			echo ".";
			echo "<br>";
		} while ($row_rs2 = mysql_fetch_assoc($rs2));
	?></td>
    
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Introduction</td>
    <td bgcolor="#FFFFFF"><?php echo $row_rs1['introduction'];?></td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF">Reviews</td>
    <td bgcolor="#FFFFFF">
    	<?php
        if(mysql_num_rows($rs5) > 0){
		do{
			echo "Reviewer: ";
			echo $row_rs5['descby'];
			echo "<br>";
			echo "Email: ";
			echo $row_rs5['email'];
			echo "<br>";
			echo "Score: ";
			echo $row_rs5['score'];
			echo "<br>";
			echo "Review: ";
			echo $row_rs5['mdesc'];
			echo "<hr>";
		} while ($row_rs5 = mysql_fetch_assoc($rs5));
		}
	?>
    
    </td>
  </tr>
</table>

<?php
	mysql_free_result($rs1);
	mysql_free_result($rs2);
	mysql_free_result($rs4);
	mysql_free_result($rs5);
?>