<?php
include "config.php";

 
 

$name=$_POST['name'];
$description=mysql_real_escape_string($_POST['description']);

   	$dt=date('y-m-d');

   
		

$sql = mysql_query("INSERT INTO `services` (`name`,`discription`,`record_dt`)
					VALUES ('$name','$description','$dt')")or die(mysql_error($conn));

					if ($sql== TRUE) {

						echo "1";
					} 
			 
					else {
						echo "2 " .mysql_error($conn);
					}
			  
				

			
			?>