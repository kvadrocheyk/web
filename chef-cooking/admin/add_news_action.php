<?php
	include("../config.php");
	function filter_data($var)
{
	$var=mysql_real_escape_string($var);
	// $var=htmlspecialchars($var);
	$var=trim($var);
	return $var;
}
$title=filter_data($_POST['title']);
$summary=filter_data($_POST['summary']);
$ingridienti=filter_data($_POST['ingridienti']);
$full=$_POST['full'];
$type=$_POST['type'];
$date=time();
$q=mysql_query("INSERT INTO articles SET title='$title',summary='$summary',ingridienti='$ingridienti',full='$full',date='$date',type='$type'");
if ($q==true) {
	echo "<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>";
}
else{
	mysql_error();
}
?>