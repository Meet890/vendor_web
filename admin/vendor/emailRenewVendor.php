<?php
require 'config.php';
session_start();
$username = $_SESSION["username"];
$reg_id=$_SESSION['reg_id'];
$otp_err=$err="";
// $username = $_GET["username"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kachchhivent@gmail.com';                     //SMTP username
    $mail->Password   = 'jotw vkrr nwqe awsx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kachchhivent@gmail.com', 'kachchhivent');
  
    $mail->addReplyTo('kachchhivent@gmail.com', 'kachchhivent');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
$sql="SELECT * FROM registration  WHERE reg_id='$reg_id' "; 
$result=mysqli_query($conn,$sql);
if($result){
    
   try {
    while ($row=mysqli_fetch_assoc($result)) {
        $email = $row['reg_email'];
        $name  = $row['reg_name'];
    
    $mail->addAddress($email, $name);     //Add a recipient ..........................
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hello '.$name;
    $mail->Body    = "Your account is Renewed ..please wait for varify your payment,It's took 1-3 Day to confirmation. ".'</b>'.'We are contack soon via email.';
    $mail->AltBody = '';
    $mail->send();
   

     header('Location: index.php');
    }

} catch (Exception $e) {
    echo "Message could not be sent. Check your connection";
}
   
}

   ?>