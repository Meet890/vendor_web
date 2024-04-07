<?php
require 'config.php';
session_start();
$otp_err=$err="";
// $username = $_GET["username"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
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

   try {
    $id = $_GET['id'];
$sql = "SELECT * FROM registration WHERE reg_id =$id  " ;
    $query = mysqli_query($conn, $sql);
     if($query){
        while ($row=mysqli_fetch_array($query)) { 
            $email =$row['reg_email'];
            $id =$row['reg_id'];
            $name= $row['reg_name'];
    $mail->addAddress($email, $name);     //Add a recipient ..........................
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Your applied registration is rejected";
    $mail->Body    = "Your registered account has been cancelled / deleted due some resons, Your pay that will be returned within 3 days.. Condition (if Your account is not accepted). if dont get payment contact admin ".'</b>';
    $mail->AltBody = '';
    $mail->send();
   
    
       $sql ="DELETE FROM registration WHERE reg_id='$id'";
   $res =mysqli_query($conn , $sql );
   if ($res == true) {
       header("Location: register.php");
   }
        }}
} catch (Exception $e) {
    echo "Message could not be sent. Check your connection";
}




   
   ?>