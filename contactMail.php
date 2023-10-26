<?php
    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $message = $_POST['message'];
        
    $to = "loyolakvmnd@gmail.com";   //email id of receiver
    $subject = "New Request from $fname";
    $email_body = "Name: $fname.\n" . 
                "Mobile Number: $mobile.\n" . 
                "Message : $message.\n";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From:' . $email ;

    if(mail($to,$subject,$email_body,$headers)) {
        header("Location: contactUs.php?status=1");
    }else{
        header("Location: contactUs.php?status=0");
    }
        
?>