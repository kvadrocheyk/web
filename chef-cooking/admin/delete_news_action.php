<?php
	include("../config.php");
	$id=$_GET['id'];
	if (is_numeric($id))
	 {
		$q=mysql_query("DELETE FROM articles WHERE id='$id'");
		if ($q==true) 
		{
			echo "<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>";
		}

		else
		{
			mysql_error();
		}
	}
?>