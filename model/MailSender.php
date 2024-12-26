<?php

include "SMTP.php";
include "PHPMailer.php";
include "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

class MailSender
{
    public static function sendMail($name, $sender, $mailSubject, $mailBody)
    {
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'raviduyashith123@gmail.com';
        $mail->Password = 'szihqpuvvavvzhvn';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('raviduyashith123@gmail.com', 'Client from Portfolio: '.$name);
        $mail->addReplyTo($sender, $name);
        $mail->addAddress($sender);
        $mail->isHTML(true);
        $mail->Subject = $mailSubject;
        $mail->Body    = $mailBody;

        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }
}
