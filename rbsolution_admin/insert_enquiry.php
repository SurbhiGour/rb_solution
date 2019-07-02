<?php
include "config.php";

     $e_id=$_POST['rec_id'];
	$description=$_POST['description'];
	$email=$_POST['email'];
	
	
	 $sql=mysql_query("UPDATE `enquiry` SET 
	`reply`='$description' WHERE id='$e_id'")or die();

		 if ($sql== TRUE) {
  $body = "This is testing email";
          
                require_once('PHPMailer_5.2.4/class.phpmailer.php');
                $mail= new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug=1;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='';
                $mail->Host = "mail.e-bc.in";
                $mail->Port = 587;
                $mail->IsHTML (true);
                $mail->Username = 'cs@e-bc.in';
                $mail->Password = 'cs@2017';
                $mail->SetFrom("cs@e-bc.in");
                
                // $mail->From = $email_c;
                // $mail->FromName = "$name";
                // $mail->FromName = $name;

                 $mail->AddAddress($email);
               
                $mail->Subject = "Reply Through RBsolution";

                $mail->Body = "Description"."<BR>".$description. "<BR><BR>";
                
                if(!$mail->Send()) {
                    // echo "Mailer Error" . $mail->ErrorInfo;
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }


                else{
                    echo "1";
                }

  }
  else
  {
  	echo "error";
  }
	


?> 