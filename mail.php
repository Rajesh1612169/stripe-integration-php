<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function send_mail()
{

    $mail = new PHPMailer;

    $mail->isSMTP();                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;               // Enable SMTP authentication
    $mail->Username = 'mikefury400@gmail.com';   // SMTP username
    $mail->Password = 'abc.1612169';   // SMTP password
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                    // TCP port to connect to

// Sender info
    $mail->setFrom('mikefury400@gmail.com', 'Rajesh Kumar');
    $mail->addReplyTo('mikefury400@gmail.com', 'Rajesh kumar');

// Add a recipient
    $mail->addAddress('mikefury400@gmail.com');

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
    $mail->isHTML(true);

// Mail subject
    $mail->Subject = 'Email from Localhost by CodexWorld';

// Mail body content
    $bodyContent = '<h1>How to Send Email from Localhost using PHP by Rajesh Kumar</h1>';
    $bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b> Rajesh Kumar</b></p>';
    $mail->Body    = $bodyContent;

// Send email
    if(!$mail->send()) {
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }

}


?>