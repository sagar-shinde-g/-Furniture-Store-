<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

if (isset($_POST['subm'])) {
    //print_r($_FILES);

    $email = "reciver email";
    $subject = "new order placed";
    $message = "hi adil...new order placed by your customer...on furniture store .....following are detail of your customer..";

    try {

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your email';
        $mail->Password   = 'email password';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;


        $mail->setFrom('your email', 'Furniture Store');

        $mail->addAddress($email);

        if ($_FILES['pdf']['name'] != null) {
            if (move_uploaded_file($_FILES['pdf']['tmp_name'], "uploads/{$_FILES['pdf']['name']}")) {
                $mail->addAttachment("uploads/{$_FILES['pdf']['name']}");
            }
        }


        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<script>history.back()</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "place not setted";
}
