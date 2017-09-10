<?php
$firstname=$_POST['firstname'];
$emaile=$_POST['email'];
$txt=$_POST['message'];
$to = "ofancalicut@gmail.com";
         $subject = "Message From OFAN";
         
         $message = "Name:".$firstname;
         $message .= "Email".$emaile;
         $message .= "Message".$txt;
         $header = "From:info@ofan.in.com \r\n";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            header("Location:./donate.html?mess=1");
         }else {
            header("Location:./donate.html?mess=2");
         }
?>