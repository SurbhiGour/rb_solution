<?php 
include "config.php";
	
	$id = $_POST['id'];

	$sql = mysql_query("DELETE FROM gallery WHERE id='$id'")or die(mysql_error($conn));
	if($sql==true)
	{
		echo "1";
	}
	else{
		echo "2";
	}

 ?>