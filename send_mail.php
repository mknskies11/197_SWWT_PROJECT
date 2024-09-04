<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST['submitContact'])){
    $contactname = $_POST['contactname'];
    $contactemail = $_POST['contactemail'];
    $contactsubject = $_POST['contactsubject'];
    $contactmessage = $_POST['contactmessage'];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'monoteamcontact.com';                     //SMTP username
    $mail->Password   = 'znieigxnuhemarve';                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //ENCRYPTION_SMTPS 465 Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('monoteamcontact@gmail.com', 'Monochrome Team');
    $mail->addAddress('monoteamcontact@gmail.com', 'Monochrome Team');     //Add a recipient


    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New enquiry';
    $mail->Body    = '<h4>Hello, you got a new enquiry<h4>
        <h5>Name: '.$contactname.'<h5>
        <h5>Email: '.$contactemail.'<h5>
        <h5>Subject: '.$contactsubject.'<h5>
        <h5>Message: '.$contactmessage.'<h5>
        ';


    if( $mail->send()){
        $_SESSION['status'] = "Thank you for contacting us!";
        header("location: {$_SERVER["HTTP_REFERER"]}");
        exit(0);
    }
    else{
        $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: {$_SERVER["HTTP_REFERER"]}");
        exit(0);
    }
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
else{
    header('location: home.php'); 
    exit(0);
}
?>