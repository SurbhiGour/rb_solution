<?php

 
if (isset($_POST['submit']))
   {
	 session_start();
   
    include("config.php");
    $error = "email/password incorrect";
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query = mysql_query("SELECT * FROM admin WHERE email='$username' and password='$password'")or die(mysql_error($conn));

  

 
  $data= mysql_fetch_assoc($query);
   
  $count=mysql_num_rows($query);

  
    if(mysql_num_rows($query))  
    {              
       $_SESSION['id']=$data['id'];
       $_SESSION['name']=$data['name'];

        header('location:dashboard.php');
      //exit;
    }
 
   
else
{ 
     $_SESSION["error"] = $error;
     header('location:index.php');
}
    }
 


    ?> 