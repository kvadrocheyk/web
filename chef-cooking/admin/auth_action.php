<?php
session_start();
	
function filter_data($var)
{
	$var=mysql_real_escape_string($var);
	$var=htmlspecialchars($var);
	$var=trim($var);
	return $var;
}
$login=filter_data($_POST['login']);
$pass=filter_data($_POST['pass']);
if ($login=="admin" AND $pass=="admin") {
	$_SESSION['login']=$login;
	$_SESSION['pass']=$pass;
	echo "<html><head><meta http-equiv='Refresh' content='0; URL=../admin.php'></head></html>";
}
?>