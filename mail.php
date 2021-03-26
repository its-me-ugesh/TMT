<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "its.me.ugesh@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: uge.fun@gmail.com" . "\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:404.html");
?>