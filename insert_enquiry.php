

<?php

  include "config.php";
            




$name=$_POST['name'];
$email_c=$_POST['email'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$file=$_FILES["file"]["name"];
 
       
                    if($file!=null || $file='')
                    
                      {
                        if(isset($_FILES["file"]["name"]))  
                        {   
                          $target_dir ="images/enquiry/";
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


$query = mysql_query("INSERT INTO enquiry (`customer_name`,`customer_email`,`customer_subject`,`customer_desc`,`customer_img`) VALUES ('$name','$email_c','$subject','$description','$doc')")or die(mysql_error($conn));
    if ($query== TRUE) {
  $body = "This is testing email";
          
                $email1='pooja.ebc2018@gmail.com';

  if(!empty($email1))
               {
                require_once('PHPMailer_5.2.4/class.phpmailer.php');
                $mail= new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug=1;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='';
                $mail->Host = "mail.e-bc.in";
                //  $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->IsHTML (true);
                $mail->Username = 'cs@e-bc.in';
                $mail->Password = 'cs@2017';
                $mail->SetFrom("cs@e-bc.in");
            
               
             
                $mail->AddAddress($email1);
                    $mail->Subject = "Received Enquiry through client";

                $mail->Body = "Client Name:".$name. "<BR><BR>".
                 "Email:". $email_c."<br><BR>"."Subject:".$subject."<br><BR>"."Description:".$description;
                
                $filename = "images/enquiry/" . $_FILES["file"]["name"];
                $mail->AddAttachment($filename);

}
                if(!$mail->Send()) {
                    // echo "Mailer Error" . $mail->ErrorInfo;
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                
                
                 else{
               require_once('PHPMailer_5.2.4/class.phpmailer.php');
                $mail= new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug=1;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='';
                $mail->Host = "mail.e-bc.in";
                //  $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->IsHTML (true);
                $mail->Username = 'cs@e-bc.in';
                $mail->Password = 'cs@2017';
                $mail->SetFrom("cs@e-bc.in");
            
               
             
                $mail->AddAddress($email_c);
                    $mail->Subject = "Received Enquiry through RB Solution";

                $mail->Body = "Thank You For Contact us We Will get Back Soon.."."<BR>"."Client Name:".$name. "<BR><BR>".
                 "Email:". $email_c."<br><BR>"."Subject:".$subject."<br><BR>"."Description:".$description;
                
                $filename = "images/enquiry/" . $_FILES["file"]["name"];
                $mail->AddAttachment($filename);
                if(!$mail->Send()) {
                    // echo "Mailer Error" . $mail->ErrorInfo;
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                

                else{
                    echo "1";
                }
                }


           
}
        else
        {
            
            alert("error...");
           
        }
  
}
else
{

$query1 = mysql_query("INSERT INTO enquiry (`customer_name`,`customer_email`,`customer_subject`,`customer_desc`) VALUES ('$name','$email_c','$subject','$description')")or die(mysql_error($conn));
    if ($query1== TRUE) {

  $body = "This is testing email";
                   
                    
              
        
                $email1='pooja.ebc2018@gmail.com';

  if(!empty($email1))
               {
                require_once('PHPMailer_5.2.4/class.phpmailer.php');
                $mail= new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug=1;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='';
                $mail->Host = "mail.e-bc.in";
                //  $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->IsHTML (true);
                $mail->Username = 'cs@e-bc.in';
                $mail->Password = 'cs@2017';
                $mail->SetFrom("cs@e-bc.in");
            
               
             
                $mail->AddAddress($email1);
                    $mail->Subject = "Received Enquiry through client";

                $mail->Body = "Client Name:".$name. "<BR><BR>".
                 "Email:". $email_c."<br><BR>"."Subject:".$subject."<br><BR>"."Description:".$description;
                
           

}
                if(!$mail->Send()) {
                    // echo "Mailer Error" . $mail->ErrorInfo;
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                
                
                 else{
               require_once('PHPMailer_5.2.4/class.phpmailer.php');
                $mail= new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug=1;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='';
                $mail->Host = "mail.e-bc.in";
                //  $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->IsHTML (true);
                $mail->Username = 'cs@e-bc.in';
                $mail->Password = 'cs@2017';
                $mail->SetFrom("cs@e-bc.in");
            
               
             
                $mail->AddAddress($email_c);
                    $mail->Subject = "Received Enquiry through RB Solution";

                $mail->Body = "Thank You For Contact us We Will get Back Soon.."."<BR>"."Client Name:".$name. "<BR><BR>".
                 "Email:". $email_c."<br><BR>"."Subject:".$subject."<br><BR>"."Description:".$description;
                
               
                if(!$mail->Send()) {
                    // echo "Mailer Error" . $mail->ErrorInfo;
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                

                else{
                    echo "1";
                }
                }


           
}
        else
        {
            
            alert("error...");
           
        }
  


}
            
           
       


?>
