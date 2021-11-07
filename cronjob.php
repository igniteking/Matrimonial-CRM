<?php
$date = date("Y-m-d");
$path = "profiles/$date/";
$zipcreated = "archives/$date.zip";

$zip = new ZipArchive;

if ($zip->open($zipcreated, ZipArchive::CREATE) === TRUE) {
    $dir = opendir($path);
    while ($file = readdir($dir)) {
        if (is_file($path . $file)) {
            $zip->addFile($path . $file, $path . $file);
        }
    }
    $zip->close();
}
echo $date." Zip Created";

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'vishwavedika.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@vishwavedika.net';                     //SMTP username
    $mail->Password   = 'Admin@123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admin@vishwavedika.net', 'Mailer');
    $mail->addAddress('quicksoftssc@gmail.com');               //Name is optional
    $mail->addReplyTo('admin@vishwavedika.net', 'Information');
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Vishwavedika Archives '.$date.'';
    $mail->Body    = 'Hello Team, <br><br>
    A zip generated link to download todays archive!<br>
    <a href="https://v2.vishwavedika.net/archives/'.$date.'.zip">https://v2.vishwavedika.net/archives/'.$date.'.zip</a>';

    $mail->send();
    echo "<br>".$date." Mail Has Been Sent!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}