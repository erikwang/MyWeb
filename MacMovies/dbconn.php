<?php
$hostname_cnn1 = "localhost";
$database_cnn1 = "macmovie";
$username_cnn1 = "macmovie";
$password_cnn1 = "macmovie";
$cnn1 = mysql_pconnect($hostname_cnn1, $username_cnn1, $password_cnn1) or trigger_error(mysql_error(),E_USER_ERROR);



/*$hostname_cnn1 = "mysqlsrv1.cas.mcmaster.ca";
$database_cnn1 = "wang779";
$username_cnn1 = "wang779";
$password_cnn1 = "wang779";
$cnn1 = mysql_pconnect($hostname_cnn1, $username_cnn1, $password_cnn1) or trigger_error(mysql_error(),E_USER_ERROR);*/
?> 