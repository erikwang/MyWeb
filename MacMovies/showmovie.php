<?php require_once('dbconn.php'); ?>

<?php
session_start();
$msn = $_GET['msn'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mac Movie - show a movie informaiton</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000000;
}
</style>
</head>

<body>
<?php include 'titlediv.php';?>
<div class="Layer0" id="bodylayer">
<a href="movielist.php"> Back to list </a>
<iframe height="600px" width="100%" frameborder="0" src="showmovie_embed.php?msn=<?php echo $msn;?>"></iframe>
</div>
</body>
</html>