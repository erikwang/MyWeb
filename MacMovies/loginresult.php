<?php require_once('dbconn.php'); ?>

<?php
	session_start();
	$account = $_GET['tf_account'];
	$pswd = $_GET['tf_pswd'];
	//print("Account = $account, Password = $pswd");
	
	mysql_select_db($database_cnn1, $cnn1);
	//$account = $_GET['msn'];
	$query_account = "SELECT * from tb_account where accountname = '$account'";
	$rs1 = mysql_query($query_account, $cnn1) or die(mysql_error());
	$row_rs1 = mysql_fetch_assoc($rs1);
	$url = "movielist.php";
	
	if(mysql_num_rows($rs1) >0){
		if ($row_rs1['pswd'] == $pswd){
			if(!isset($_SESSION['pri'])){
				$_SESSION['pri'] = $row_rs1['privilege'];
			}else{
				print("Overwrite previous privilege");
				$_SESSION['pri'] = $row_rs1['privilege'];
			}
			print("Credential accepted");
			header( "Location: $url");
		}else{
			print("The credential password is wrong, please try again");
		}
	}else{
		print("The credential account name is not existed, please try again");
	}

?>
