
<?php

require "vendor/autoload.php";

$mail = new PHPMailer;

$mail->isSMTP();                                     
$mail->Host = 'smtp.mailtrap.io'; 
$mail->SMTPAuth = true;                              
$mail->Username = 'ed4c6a4f09be6b';                 
$mail->Password = 'a9b8a70a1fa00a';                    
$mail->SMTPSecure = 'tls';                    
$mail->Port = 2525;   
$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>