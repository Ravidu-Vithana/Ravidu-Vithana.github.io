<?php

include "./MailSender.php";

$name = $_GET[ "name"];
$email = $_GET["email"];
$subject = $_GET["subject"];
$message = $_GET["message"];

if(MailSender::sendMail($name, $email, $subject, $message)){
    echo("success");
}else{
    echo("Message sending failed!");
}

?>