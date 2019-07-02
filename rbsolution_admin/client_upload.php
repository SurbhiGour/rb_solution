<?php
include "config.php";

 
 

	$file=$_FILES["file"]["name"];

   	$dt=date('y-m-d');

   
			if($file!=null || $file='')
					{
						if(isset($_FILES["file"]["name"]))  
						{   
						  $target_dir ="img/clients/";
						  // $maxsize    = 2097152;  
						  $docFileType = pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);    
						  $target_file = $target_dir.$_FILES["file"]["name"];

			 
					       if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
					        {      
					            $doc=$target_file;            
					        } 
					       else{        
					            echo "Sorry, there was an error uploading your file.";      
					        }       
						}

$sql = mysql_query("INSERT INTO `clients` (`image`,`record_dt`)
					VALUES ('$doc','$dt')")or die(mysql_error($conn));

					if ($sql== TRUE) {

						echo "1";
					} 
			 
					else {
						echo "2 " .mysql_error($conn);
					}
			  
				}


			
			?>