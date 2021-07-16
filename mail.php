<?php

// $message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){
    if(isset($_POST['email'], FILTER_CALIDATE_EMAIL)){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $subject= $_POST['subject'];
        $message= $_POST['message'];

        $to = "ahmedtarek5656@mail.com";
        $body = "";

        $body .= "From: ".$name. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        // $message_sent = true;
        mail($to,$subject,$body);
        header("Location:https://ahmedtarek.tech/");
    }
}

//get data from form  
// $name = $_POST['name'];
// $email= $_POST['email'];
// $subject= $_POST['subject'];
// $message= $_POST['message'];
// $to = "ahmedtarek5656@mail.com";
// $subject = "Mail From website";
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $subject . "\r\n Message =" . $message;
// $headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
//redirect
// header("Location:index.html");
?>