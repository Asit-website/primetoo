<?php 
if(isset($_POST['btn-send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $enquiry = $_POST['query'];

    $subject = "form submission";
    $message = "Name: ".$name."\n"."Query: ".$enquiry."\n";
    $headers = "From:".$email.">\r\n";
    $to = "solution@primetoolsindia.com";
   if(mail($to,$subject,$message,$headers)){
     echo "success";
   }
   else{
    echo "something went wrong";
   }
   

}
   
   
?> 