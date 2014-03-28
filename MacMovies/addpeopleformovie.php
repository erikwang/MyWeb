<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MacMovie - New user register</title>
<link href="../6ww/css/bootstrap.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body { font-size:14px;}

</style>

<script type="text/javascript" src="js/MovingImage.js"></script>
<script type="text/javascript" src="js/MovingToTop.js"></script>
<script src="js/VaildateInformation_moviepeople.js" type="text/javascript"></script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/mycss.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include 'titlediv.php';?>
<div id ="bodylayer" class="Layer0">
<form action="registerationresult_people.php" method="post" name="regform" class="form-inline" id="regform" onsubmit="return vaildateName(this)">
  <table width="80%" border="0" cellpadding="0" cellspacing="0" class="table">
    <tr>
	  <td colspan="2" class="text-center">MacMovie - New user registeration </td>
    </tr> 
	<tr>
   	  <td width="100" nowrap="nowrap"> Name </td>
		<td align="left">
		<div class="form-group">
		First Name<input name="tf_firstname" type="text" class="input-sm" id = "tf_firstname"  placeholder="Enter your first name" onmouseover="showhint('firstname')"/>
		</div>
		<div class="form-group">
		Last Name<input type="text" id="tf_lastname" name="tf_lastname" class="input-sm" placeholder="Enter your last name" onmouseover="showhint('lastname')"/>		
		</div>
	  </td>
	</tr>
    <tr>
		<td colspan="2" height="120px">
		<div class="form-group">
		Date of birth<input type="text" id="tf_dob" name="tf_dob" class="input-sm" placeholder="Enter the date of brith" onmouseover="showhint('dob')"/>		
		</div>

		</td>
    </tr>

    <tr>
		<td colspan="2" height="120px">
		<div><label id="message" value="See message here">See hint message here.</label>
		</td>
    </tr>
    <tr>
		<td colspan="2">
        <input type="submit" name="Submit" value="Submit" class="btn-lg"/>
        <input type="reset" class="btn-lg"/>
        <input type="button" class="btn-lg" onclick="goHome()" value="QUIT"/> 
		</td>
    </tr>
  </table>
</form>
</body>
</html>
