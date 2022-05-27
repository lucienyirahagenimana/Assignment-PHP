<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";


$mail = new PHPMailer(true);
$my_email    = 'nlucie415@gmail.com';
$my_password = 'kigali25';
$recipient = $_SESSION['mail']['recipient'];
$subject = $_SESSION['mail']['subject'];
$key = $_SESSION['mail']['key'];
// email body
$email_body = <<< message
<h1>Email verification</h1>
<p>
Click here to verify your account <br>
<a href="http://localhost/ruth/Assignment-PHP/verify.php?key=$key"><button>Verify account</button></a>
<br>
or copy link below then paste in the browser
<a href="http://localhost/ruth/Assignment-PHP/verify.php?key=$key">http://localhost/ruth/Assignment-PHP/verify.php?key=$key</a>
</p>
message;

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
    $mail->Username   = $my_email;                               //SMTP username
    $mail->Password   = $my_password;                            //SMTP password
    $mail->SMTPSecure = 'tls';                                   //Enable implicit TLS encryption
    $mail->Port       = 587;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom($my_email, 'Ruth');
    $mail->addAddress($recipient);                                    //Add a recipient

    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $email_body;

    $mail->send();

    header("location: ../congz.php");
} catch (Exception $e) {
    print "{$mail->ErrorInfo}";
}
